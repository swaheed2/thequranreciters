import {connect} from 'react-redux'
import { withRouter } from 'react-router'
import Reciters from '../components/Reciters'
import { fetchReciters} from '../actions'

const mapStateToProps = (state) => {
	return {
		recitersList: state.ReciterReducer.recitersList
	}
}

const mapDispatchToProps = { 
	fetchReciters: (name) => {
		return (dispatch) => {
			dispatch(fetchReciters(name))
		}
	}
}
export default withRouter(connect(mapStateToProps, mapDispatchToProps)(Reciters))