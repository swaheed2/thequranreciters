import React, { Component } from 'react';
import { connect } from 'react-redux'
import { withRouter } from 'react-router'
import { fetchReciters, play } from '../actions/'
import { AudioPlayer } from '../containers';
import { AppBar, AppBanner, RecitersList } from '../components';

class HomeContainer extends Component {
	componentDidMount() {
		this.props.fetchReciters();
	}
	render() {
		const recitersList = this.props.recitersList
		return <div>
			<AppBar />
			<AppBanner />
			<RecitersList onReciterClick={this.props.play} list={recitersList} />
			<AudioPlayer />
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
	},
	play: () => {
		return (dispatch) => {
			dispatch(play('https://ia800408.us.archive.org/27/items/AlaaAlmezjaji/1437-5-2_Maghreb.mp3'))
		}
	}
}
export default withRouter(connect(mapStateToProps, mapDispatchToProps)(HomeContainer))