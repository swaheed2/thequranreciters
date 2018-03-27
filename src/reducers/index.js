import { combineReducers } from 'redux'
import HomeReducer from './HomeReducer'
import RecitersReducer from './RecitersReducer'
import AudioPlayerReducer from './AudioPlayerReducer'
import { reducer as formReducer } from 'redux-form';
import { firebaseReducer } from 'react-redux-firebase'

const quranRecitersReducers = combineReducers({
  HomeReducer,
  RecitersReducer,
  form: formReducer,
  AudioPlayer: AudioPlayerReducer,
  firebase: firebaseReducer
})

export default quranRecitersReducers