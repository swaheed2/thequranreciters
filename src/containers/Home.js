import {connect} from 'react-redux'
import { withRouter } from 'react-router'
import Home from '../components/Home'
import { fetchReciters } from '../actions/'

const mapStateToProps = (state) => {
	return {
		recitersList: state.HomeReducer.recitersList
	}
}

const mapDispatchToProps = { 
	fetchReciters: (message) => {
		return (dispatch) => {
			dispatch(fetchReciters(message))
		}
	}
}
export default withRouter(connect(mapStateToProps, mapDispatchToProps)(Home))