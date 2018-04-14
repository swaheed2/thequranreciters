import { combineReducers } from 'redux'
import AppReducer from './AppReducer'
import RecitersReducer from './RecitersReducer'
import AudioPlayerReducer from './AudioPlayerReducer'
import { reducer as formReducer } from 'redux-form';
import { firebaseReducer } from 'react-redux-firebase'

const quranRecitersReducers = combineReducers({
  RecitersReducer,
  form: formReducer,
  AudioPlayer: AudioPlayerReducer,
  firebase: firebaseReducer,
  AppReducer: AppReducer
})

export default quranRecitersReducers