import {connect} from 'react-redux'
import { withRouter } from 'react-router'
import Home from '../components/Home'
import HomeReducer from '../reducers/HomeReducer'
import { fetchAllReciters } from '../actions/'

const mapStateToProps = (state) => {
	return {
		showReciters: state.showReciters
	}
}

const mapDispatchToProps = { 
	fetchAllReciters: (message) => {
		return (dispatch) => {
			dispatch(fetchAllReciters(message))
		}
	}
}
export default withRouter(connect(mapStateToProps, mapDispatchToProps)(Home))