import { createStore, applyMiddleware, compose  } from 'redux'
import quranRecitersReducers from './reducers'
import thunk from 'redux-thunk'

const store = createStore(quranRecitersReducers,
	compose(
		applyMiddleware(thunk),
		window.__REDUX_DEVTOOLS_EXTENSION__ && window.__REDUX_DEVTOOLS_EXTENSION__())
	)

export default store

