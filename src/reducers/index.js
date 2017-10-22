import { combineReducers } from 'redux'
import HomeReducer from './HomeReducer'
import ReciterReducer from './ReciterReducer'
import { reducer as formReducer } from 'redux-form';

const quranRecitersReducers = combineReducers({
  HomeReducer,
  ReciterReducer,
  form: formReducer
})

export default quranRecitersReducers