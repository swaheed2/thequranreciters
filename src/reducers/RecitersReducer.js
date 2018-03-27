import { RECITERS_ACTION_TYPES, RECITERS_IMAGES, RECITER_IMAGE, TRACKS } from '../config';
const initialState = {
	recitersList: undefined,
	reciterImages: {},
	albumTracks: {},
	selectedAlbum: undefined
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
			break;

		case RECITER_IMAGE.COMPLETE:
			if (!newState.reciterImages) {
				newState.reciterImages = {};
			}
			newState.reciterImages = Object.assign({}, newState.reciterImages, action.data)
			break;

		case TRACKS.COMPLETE:
			newState.selectedAlbum = Object.assign({}, action.data);
			newState.albumTracks = Object.assign(newState.albumTracks, action.data)
			break;

		default:
			break;
	}
	return newState;
}

export default RecitersReducer

