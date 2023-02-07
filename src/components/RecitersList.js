import React from 'react'
import ReciterCard from './ReciterCard'
import { withStyles } from 'material-ui/styles'
import { firebaseConnect } from 'react-redux-firebase'
import { withRouter } from 'react-router'
import { connect } from 'react-redux'
import Grid from 'material-ui/Grid';
import GridList, { GridListTile, GridListTileBar } from 'material-ui/GridList';
import { compose } from 'redux'
import { Config } from '../config';
import { getTopReciters } from '../actions';
import Typography from 'material-ui/Typography';
import ShowChart from 'material-ui-icons/ShowChart';
import List from 'material-ui-icons/List';

const styles = theme => ({
	containerStyle: {
		padding: '10px'
	},
	favRoot: {
		overflow: 'hidden'
	},
	favGridList: {
		flexWrap: 'nowrap',
		transform: 'translateZ(0)',
		overflowY: 'hidden',
		margin: '10px 0px'
	},
	favImg: {
		width: '80px',
		height: '80px',
		borderRadius: '50%',
		overflow: 'hidden',
		border: '.5px solid #fff',
		margin: '0 auto'
	},
	heading: {
		color: theme.palette.primary.contrastText,
		padding: '15px 20px',
		background: 'rgba(0,0,0,.03)',
		margin: '10px 0px',
		display: 'flex',
		justContent: 'center',
		alignItems: 'center'
	}

})
class RecitersList extends React.Component {

	constructor() {
		super();
		this.toReciterDetails = this.toReciterDetails.bind(this);
	}

	componentWillMount() {
		this.props.getTopReciters();
		/* if (!this.props.topReciters) {
			this.props.getTopReciters();
		} */
	}

	toReciterDetails(reciter) {
		this.props.history.push('/reciters/' + reciter.id)
	}

	componentWillReceiveProps(nextProps) {

	}

	render() {

		const list = this.props.list;

		const topReciters = this.props.topReciters;

		const classes = this.props.classes;

		/**
		 * @type {any}
		 */
		let listItems = 'Loading...';


		let topItems = (<span />);

		topItems = (
			<div className={classes.favRoot}>
				<Typography
					variant="subheading"
					className={classes.heading}>
					<ShowChart /> <span>&nbsp;&nbsp;Trending Reciters</span>
				</Typography>
				<GridList cellHeight={160} className={classes.favGridList} cols={5}>
					{
						topReciters.map((key, id) => {
							const imgUrl = '/assets/img/reciters/' + key + '.jpg';
							let card = (<span />)
							if (list[key]) {
								card = (
									<ReciterCard
										imgUrl={imgUrl}
										onClick={() => { this.toReciterDetails(list[key]) }}
										reciter={list[key]}
									/>
								);
							}
							return (
								<Grid item key={id}
									xs={4} sm={3} md={2} lg={1} xl={1}>
									{card}
								</Grid>
							)
						})
					}
				</GridList>
			</div>
		)

		listItems = (
			<div>
				<Typography
					variant="subheading"
					className={classes.heading}>
					<List /> <span>&nbsp;&nbsp;All Reciters</span>
				</Typography>
				<Grid container spacing={16}>
					{
						Object.keys(list).map((key, id) => {
							const imgUrl = '/assets/img/reciters/' + key + '.jpg';
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
				</Grid>
			</div>
		);

		return (
			<div className={this.props.classes.containerStyle}>
				{topItems}
				{listItems}
			</div>
		)
	}

}

const mapStateToProps = (state) => {
	return {
		list: state.firebase.data.reciters || state.RecitersReducer.recitersList,
		topReciters: state.RecitersReducer.topReciters
	}
}

const mapDispatchToProps = {
	getTopReciters() {
		return (dispatch) => {
			dispatch(getTopReciters());
		}
	}
}

export default
	withRouter(
		// @ts-ignore
		compose(
			firebaseConnect([
				'reciters'
			]),
			connect(mapStateToProps, mapDispatchToProps),
			withStyles(styles)
		)(RecitersList)
	)

