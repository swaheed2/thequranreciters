import {connect} from 'react-redux'
import { withRouter } from 'react-router'
import AddReciters from '../components/AddReciters'
import { Field, reduxForm } from 'redux-form'


const mapStateToProps = (state) => {
	return {
		recitersList: state.HomeReducer.recitersList
	}
}

const mapDispatchToProps = { 
	fetchReciters: () => {
		return (dispatch) => {
			console.log('hi')
		}
	}
}
export default withRouter(connect(mapStateToProps, mapDispatchToProps)(reduxForm({ form: 'AddReciters'})(AddReciters)))