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
	const renderList = () => (
		<div className={props.classes.containerStyle}>
			{(props.list) ? props.list.map(reciter => (<ReciterCard key={reciter.id} reciter={reciter} />)) : null}
		</div>
	)
	return (
		<Paper>
			{renderList()}
		</Paper>
	)
}
export default withStyles(styles)(RecitersList)
