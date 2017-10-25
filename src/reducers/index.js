import { combineReducers } from 'redux'
import HomeReducer from './HomeReducer'
import RecitersReducer from './RecitersReducer'
import { reducer as formReducer } from 'redux-form';

const quranRecitersReducers = combineReducers({
  HomeReducer,
  RecitersReducer,
  form: formReducer
})

export default quranRecitersReducers