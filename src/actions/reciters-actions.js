import http from 'axios'
import * as jsonp from 'jsonp';
import {
	API_URL, RECITERS_ACTION_TYPES,
	RECITERS_IMAGES, RECITER_IMAGE, TRACKS
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
						.ref('reciter-images/lg/' + reciterId + '-lg.jpg');
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

export function getAlbumTracks(reciterInfo, albumId) {
	return (dispatch) => {
		jsonp(`https://archive.org/details/${albumId}?output=json&callback=JSONP_CALLBACK`,
			null,
			(err, data) => {
				if (err) {
					console.error(err);
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
					const obj = {};
					obj[albumId] = {
						reciter: reciterInfo,
						tracks: tracks
					};
					dispatch({
						type: TRACKS.COMPLETE,
						data: obj
					});
				}
			});
	}
}

export function fetchReciters(name) {
	let url = API_URL + '/reciters-list'
    /**
     * TODO
	 * // we should filter in backend
     * if(name){
     *  url += `?name=${name}`
     * }
     */
	return async (dispatch) => {
		try {
			const res = await http.get(url);

			let list = res.data;

			if (name) {
				list = list.filter(obj => {
					return obj.name.toLowerCase()
						.indexOf(name.toLowerCase()) !== -1;
				})
			}

			const action = RECITERS_ACTION_TYPES.RECITERS_COMPLETE;

			dispatch({ type: action, data: list })

		} catch (err) {
			dispatch({
				type: RECITERS_ACTION_TYPES.RECITERS_REJECTED,
				data: err
			})
		}
	}
}