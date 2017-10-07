import { combineReducers } from 'redux'
import HomeReducer from './HomeReducer'
import ReciterReducer from './ReciterReducer'

const quranRecitersReducers = combineReducers({
  HomeReducer,
  ReciterReducer
})

export default quranRecitersReducers