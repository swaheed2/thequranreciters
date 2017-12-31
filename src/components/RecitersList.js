import React, { Component } from 'react'
import Paper from 'material-ui/Paper'
import ReciterCard from './ReciterCard'
import { withStyles } from 'material-ui/styles'
import { red, purple } from 'material-ui/colors';

const styles = theme => ({
	containerStyle: {
		display: 'flex',
		flexWrap: 'wrap',
		backgroundColor: 'white'
	}



})
const RecitersList = (props) => {
	const list = props.list ? props.list : [];
	return (
		<div className={props.classes.containerStyle}>
			{
				list.map(reciter => (
					<ReciterCard
						onClick={props.onReciterClick}
						key={reciter.id} reciter={reciter}
					/>
				))
			}
		</div>
	)
}
export default withStyles(styles)(RecitersList)
