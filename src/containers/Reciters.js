import {connect} from 'react-redux'
import { withRouter } from 'react-router'
import Reciters from '../components/Reciters'
import ReciterReducer from '../reducers/ReciterReducer'
import { fetchAllReciters, reduceList } from '../actions'

const mapStateToProps = (state) => {
	return {
		showReciters: state.HomeReducer.showReciters
	}
}

const mapDispatchToProps = { 
	fetchAllReciters: () => {
		return (dispatch) => {
			dispatch(fetchAllReciters())
		}
	}, 
	filterList: (word) => {
		console.log('filter list container')
		return (dispatch) => {
			dispatch(reduceList(word))
		}
	}
}
export default withRouter(connect(mapStateToProps, mapDispatchToProps)(Reciters))