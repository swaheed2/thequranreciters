import React, { Component } from 'react'
import Paper from 'material-ui/Paper'
import ReciterCard from './ReciterCard'
import { withStyles } from 'material-ui/styles'
import { red, purple } from 'material-ui/colors';
import Grid from 'material-ui/Grid';

const styles = theme => ({
	containerStyle: {
		margin: '10px',
		backgroundColor: 'white'
	}



})
const RecitersList = (props) => {
	const list = props.list ? props.list : [];
	return (
		<div className={props.classes.containerStyle}>
			<Grid container spacing={16}>
				{
					list.map(reciter => (
						<Grid item key={reciter.id}
							item
							xs={6} sm={4} md={3} lg={2} xl={1}>
							<ReciterCard
								onClick={props.onReciterClick}
								reciter={reciter}
							/>
						</Grid>
					))
				}
			</Grid>
		</div>
	)
}
export default withStyles(styles)(RecitersList)
