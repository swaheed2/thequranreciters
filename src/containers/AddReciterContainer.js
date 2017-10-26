import {connect} from 'react-redux'
import { withRouter } from 'react-router'
import AddReciter from '../components/AddReciter'
import { Field, reduxForm } from 'redux-form'
import { uploadReciter } from '../actions'

const mapStateToProps = (state) => {
	return {
		recitersList: state.form
	}
}

const mapDispatchToProps = { 
	uploadReciter: (reciterDetails) => {
		return (dispatch) => {
			dispatch(uploadReciter(reciterDetails))
		}
	}
}
export default withRouter(connect(
	mapStateToProps, mapDispatchToProps
)(reduxForm({ form: 'AddReciter'})(AddReciter)))