import {connect} from 'react-redux'
import { withRouter } from 'react-router'
import AddReciters from '../components/AddReciters'
import { Field, reduxForm } from 'redux-form'
import { AddReciter } from '../actions'

const mapStateToProps = (state) => {
	return {
		recitersList: state.form
	}
}

const mapDispatchToProps = { 
	addReciter: (reciterDetails) => {
		return (dispatch) => {
			dispatch(AddReciter(reciterDetails))
		}
	}
}
export default withRouter(connect(
	mapStateToProps, mapDispatchToProps
)(reduxForm({ form: 'AddReciters'})(AddReciters)))