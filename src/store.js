import { createStore, applyMiddleware, compose } from 'redux'
import quranRecitersReducers from './reducers'
import { reactReduxFirebase } from 'react-redux-firebase'
import firebase from 'firebase/compat/app';
import 'firebase/compat/database'
import thunk from 'redux-thunk'

const firebaseConfig = {
	apiKey: "AIzaSyBCoc7ugccUuTrULpVLgJaZ_jXlmE0m6wQ",
    authDomain: "thequranreciters.firebaseapp.com",
    databaseURL: "https://thequranreciters.firebaseio.com",
    projectId: "thequranreciters",
    storageBucket: "thequranreciters.appspot.com",
    messagingSenderId: "609180565925"
}

// react-redux-firebase config
const rrfConfig = {
	userProfile: 'users',
	// useFirestoreForProfile: true // Firestore for Profile instead of Realtime DB
}

// initialize firebase instance
firebase.initializeApp(firebaseConfig)

const store = createStore(
	quranRecitersReducers,
	compose(
		reactReduxFirebase(firebase, rrfConfig),
		applyMiddleware(thunk),
		//window.__REDUX_DEVTOOLS_EXTENSION__ && window.__REDUX_DEVTOOLS_EXTENSION__()
	)
)

export default store

