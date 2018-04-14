import http from 'axios'
import * as jsonp from 'jsonp';
import {
	RECITERS_IMAGES, RECITER_IMAGE, TRACKS, RECITER
} from '../config'
import firebase from 'firebase';

export function uploadReciter(details) {
	return (dispatch) => {
		http.post('http://rest.learncode.academy/api/johnbob/friends', { details })
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
				let top = Object.keys(topReciters).sort((a, b) => {
					return topReciters[b].views - topReciters[a].views
				})
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
		console.log('loading album');
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
						for (var key in files) {
							if (key.toLowerCase().indexOf('.mp3') === -1) {
								continue;
							}
							let track = files[key];
							track.id = key;
							tracks.push(track);
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