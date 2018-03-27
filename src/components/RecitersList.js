import React from 'react'
import ReciterCard from './ReciterCard'
import { withStyles } from 'material-ui/styles'
import { firebaseConnect } from 'react-redux-firebase'
import { withRouter } from 'react-router'
import { play, setReciterImages } from '../actions/'
import { connect } from 'react-redux'
import Grid from 'material-ui/Grid';
import { isLoaded, isEmpty } from 'react-redux-firebase'
import { compose } from 'redux'

const styles = theme => ({
	containerStyle: {
		margin: '10px'
	}



})
class RecitersList extends React.Component {

	constructor() {
		super();
		this.toReciterDetails = this.toReciterDetails.bind(this);
	}


	componentWillMount() {
		this.props.setReciterImages();
	}

	toReciterDetails(reciter) {
		this.props.history.push('/reciters/' + reciter.id)
	}

	render() {

		const list = this.props.list;
		let listItems = 'Loading...';

		if (isLoaded(list) && !isEmpty(listItems)) {
			listItems = Object.keys(list).map((key, id) => {
				const imgUrl = this.props.reciterImages[key];
				return (
					<Grid item key={id}
						xs={4} sm={3} md={2} lg={1} xl={1}>
						<ReciterCard	
							imgUrl={imgUrl}
							onClick={() => { this.toReciterDetails(list[key]) }}
							reciter={list[key]}
						/>
					</Grid>
				)
			})
		}

		return (
			<div className={this.props.classes.containerStyle}>
				<Grid container spacing={16}> {listItems} </Grid>
			</div>
		)
	}

}

const mapStateToProps = (state) => {
	return {
		list: state.firebase.data.reciters,
		reciterImages: state.RecitersReducer.reciterImages
	}
}

const mapDispatchToProps = {
	play: () => {
		return (dispatch) => {
			dispatch(play('https://ia800408.us.archive.org/27/items/AlaaAlmezjaji/1437-5-2_Maghreb.mp3'))
		}
	},
	setReciterImages() {
		return (dispatch) => {
			dispatch(setReciterImages());
		}
	}
}

export default
	withRouter(
		compose(
			firebaseConnect([
				'reciters'
			]),
			connect(mapStateToProps, mapDispatchToProps),
			withStyles(styles)
		)(RecitersList)
	)

