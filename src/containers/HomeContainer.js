import React, { Component } from 'react';
import { connect } from 'react-redux'
import { compose } from 'redux'
import { withRouter } from 'react-router'
import { firebaseConnect } from 'react-redux-firebase'
import { RecitersList } from '../components';

class HomeContainer extends Component {

	render() {
		return (
			<div>
				<RecitersList />
			</div>
		)
	}
}

const mapStateToProps = (state) => {
	return {
		recitersList: state.firebase.data.reciters,
		reciterImages: state.RecitersReducer.reciterImages
	}
}

const mapDispatchToProps = {}

export default
	withRouter(
		compose(
			firebaseConnect([
				'reciters'
			]),
			connect(mapStateToProps, mapDispatchToProps)
		)(HomeContainer)
	)