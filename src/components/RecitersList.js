import React, { Component } from 'react'
import Paper from 'material-ui/Paper'
import ReciterCard from './ReciterCard'
import { withStyles } from 'material-ui/styles'
import { red, purple } from 'material-ui/colors';

const styles = theme => ({
	containerStyle: {	
		 display: 'flex',
	   flexWrap: 'wrap',
		 backgroundColor: 'white',
		 justifyContent: 'space-around',
		 '&:after': {
		 		content: "''",
		 		width: '59%'
		 }
	}
		 
		
  
})
const RecitersList = (props) => {
console.log(props.classes)
	const renderList = () => (
		<div className={props.classes.containerStyle}>
			{(props.list) ? props.list.map(reciter => (<ReciterCard key={reciter.id} reciter={reciter} />)) : null}
		</div>
	)
	return(
		<Paper zDepth={2} >
				{renderList()}
		</Paper>
	)
}
export default withStyles(styles)(RecitersList)
