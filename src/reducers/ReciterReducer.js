import { RECITERS_ACTION_TYPES } from '../config';
const initialState = {
  recitersList: null
}

const ReciterReducer = (state = initialState, action) => {

  const newState = { ...state };

  switch (action.type) {

    case RECITERS_ACTION_TYPES.RECITERS_COMPLETE:
    
      newState.recitersList = action.data
      break;

    default:
      break;
  }

  return newState;
}

export default ReciterReducer

