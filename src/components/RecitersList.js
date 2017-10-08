import React, { Component } from 'react'
import Paper from 'material-ui/Paper'
import ReciterCard from './ReciterCard'

const RecitersList = (props) => {
	
	const renderList = () => (
		<div style={{display: 'flex', flexWrap: 'wrap'}}>
			{(props.list) ? props.list.map(reciter => (<ReciterCard key={reciter.id} reciter={reciter} />)) : null}
		</div>
	)
	return(
		<Paper zDepth={2} >
				{renderList()}
		</Paper>
	)
}
export default RecitersList
