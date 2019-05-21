import {
	RECITERS_ACTION_TYPES, RECITERS_IMAGES, RECITER_IMAGE, TRACKS,
	RECITER

} from '../config';

import { recitersList, topReciters } from '../cache/reciters';

const initialState = {
	recitersList: recitersList,
	topReciters: topReciters,
	reciterImages: {},
	albumTracks: {},
	selectedAlbum: undefined,
	albumLoading: false,
	viewCounts: {}
}

const RecitersReducer = (state = initialState, action) => {

	const newState = { ...state };

	switch (action.type) {

		case RECITERS_ACTION_TYPES.RECITERS_COMPLETE:

			newState.recitersList = action.data
			break;

		case RECITERS_IMAGES.COMPLETE:
			if (!newState.reciterImages) {
				newState.reciterImages = {};
			}
			newState.reciterImages = Object.assign({}, newState.reciterImages, action.data)
			newState.reciterImages.complete = true;
			break;

		case RECITER_IMAGE.COMPLETE:
			if (!newState.reciterImages) {
				newState.reciterImages = {};
			}
			newState.reciterImages = Object.assign({}, newState.reciterImages, action.data)
			break;

		case TRACKS.COMPLETE: // aka select album
			let tracks;
			// tracks not required if already set
			if (action.data.tracks) {
				tracks = action.data.tracks;
				delete action.data.tracks;
			}
			if (tracks) {
				const trackObj = {};
				trackObj[action.data.albumId] = tracks
				newState.albumTracks = Object.assign(newState.albumTracks, trackObj)
			}
			newState.selectedAlbum = Object.assign({}, action.data);
			newState.albumLoading = false;
			break;

		case TRACKS.LOADING:
			newState.albumLoading = action.data; // album id
			console.log('setting album loading', action.data);
			break;

		case TRACKS.UNSET_SELECTED_ALBUM:
			newState.selectedAlbum = undefined;
			break;

		case RECITER.UPDATED_VIEW_COUNT:
			newState.viewCounts[action.data.reciterId] = action.data.views
			break;

		case RECITER.TOP:
			newState.topReciters = action.data;
			break;

		default:
			break;
	}
	return newState;
}

export default RecitersReducer

