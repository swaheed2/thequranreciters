// @ts-check

import http from 'axios'
import * as jsonp from 'jsonp';
import {
	RECITERS_IMAGES, RECITER_IMAGE, TRACKS, RECITER
} from '../config'
import firebase from 'firebase';

export function uploadReciter(details) {
	return (dispatch) => {
		http.post('...', { details })
			.then(function (response) {
				dispatch({
					type: 'ADD_RECITER',
					data: response.data
				})
			})
	}
}

export function setReciterImages() {
	return (dispatch) => {
		const databaseRef = firebase.database().ref('reciters');

		databaseRef.once('value')

			.then((snapshot) => {
				const reciters = snapshot.val();
				for (let reciterId in reciters) {
					const storageRef = firebase.storage()
						.ref('reciter-images/md/' + reciterId + '.jpg');
					storageRef.getDownloadURL().then((url) => {
						const obj = {};
						obj[reciterId] = url;
						dispatch({
							type: RECITERS_IMAGES.COMPLETE,
							data: obj
						})
					})
				}
			});

	}
}

export function setReciterImage(reciterId) {
	return (dispatch) => {
		if (reciterId) {
			const storageRef = firebase.storage()
				.ref('reciter-images/lg/' + reciterId + '-lg.jpg');
			storageRef.getDownloadURL().then((url) => {
				const obj = {};
				obj[reciterId] = url;
				dispatch({
					type: RECITER_IMAGE.COMPLETE,
					data: obj
				})
			})
		}

	}
}

export function unsetSelectedAlbum() {
	return (dispatch) => {
		dispatch({ type: TRACKS.UNSET_SELECTED_ALBUM });
	}
}

export function updateReciterViewCount(reciterId) {
	return (dispatch) => {
		let newViews = 0;

		firebase.database().ref('analytics/' + reciterId).once('value')
			.then((snapshot) => {
				const val = snapshot.val() || {};
				newViews = val.views || 0;

				// check if update needed
				const lastCountTime = localStorage.getItem('count_' + reciterId);
				let timeDiff = 200000;
				if (lastCountTime) {
					let nowTime = new Date().getTime();
					timeDiff = ((nowTime - Number(lastCountTime)) / 1000) / 60; // min diff
				}
				// only update view count if not within 30 min of last update
				if (timeDiff > 30) {
					newViews++;
					localStorage.setItem('count_' + reciterId, new Date().getTime() + '');
					return firebase.database().ref('analytics/' + reciterId).set({
						views: newViews
					})
				}
				else {
					return Promise.resolve();
				}
			})
			.then(() => {
				dispatch({
					type: RECITER.UPDATED_VIEW_COUNT,
					data: {
						reciterId: reciterId,
						views: newViews
					}
				});
			})
			.catch((err) => { console.error(err) });

	}
}

export function getTopReciters() {
	return (dispatch) => {
		firebase.ref('/analytics').orderByChild('views').limitToLast(10)
			.once("value", (snapshot) => {
				const topReciters = snapshot.val();
				const top = Object.keys(topReciters);
				top.sort((a, b) => {
					return topReciters[b].views - topReciters[a].views
				});
				console.log('top', top);
				dispatch({
					type: RECITER.TOP,
					data: top
				})
			});
	}
}

export function setAlbumLoading(albumId) {
	return (dispatch) => {
		dispatch({
			type: TRACKS.LOADING,
			data: albumId
		});
	}
}

export function setAlbumTracks(details) {
	return (dispatch) => {
		dispatch({
			type: TRACKS.COMPLETE,
			data: details
		});
	}
}

export function getAlbumTracks(details) {

	const { reciterInfo, albumId, id } = details;

	return (dispatch) => {
		dispatch({
			type: TRACKS.LOADING,
			data: albumId
		});

		setTimeout(() => {
			jsonp(`https://archive.org/details/${albumId}?output=json&callback=JSONP_CALLBACK`,
				null,
				(err, data) => {
					if (err) {
						dispatch({
							type: TRACKS.LOADING,
							data: false
						});
					} else {
						let tracks = [];
						let files = data.files;
						let hasTracksOrder = true;
						for (var key in files) {
							if (key.toLowerCase().indexOf('.mp3') === -1) {
								continue;
							}
							let track = files[key];
							track.id = key;
							tracks.push(track);
							if(track.track == null){
								hasTracksOrder = false;
							}
						}
						console.log('hasTracksOrder', hasTracksOrder);
						if(hasTracksOrder){
							tracks.sort((a, b) =>{
								let a1 = Number(a.track) || 0;
								let b1 = Number(b.track) || 0;
								return a1 > b1? 1 : (a1 < b1? -1 : 0);
							});
						}
						const obj = {
							reciter: reciterInfo,
							tracks: tracks,
							id: id,
							albumId: albumId
						};
						dispatch({
							type: TRACKS.COMPLETE,
							data: obj
						});
					}
				});
		}, 100)
	}
}