import React, { Component } from 'react';
import { connect } from 'react-redux'
import { withRouter } from 'react-router'
import { fetchReciters } from '../actions/'
import { AudioPlayer } from '../containers';
import { AppBar, AppBanner, RecitersList } from '../components';

class HomeContainer extends Component {
	componentDidMount() {
		this.props.fetchReciters();
	}
	render() {
		const recitersList = this.props.recitersList
		return <div>
			<AppBar/>
			<AppBanner/>
			<RecitersList list={recitersList} />
			<AudioPlayer/>
		</div>
	}
}

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
export default withRouter(connect(mapStateToProps, mapDispatchToProps)(HomeContainer))