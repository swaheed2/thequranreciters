import React, { Component } from 'react';
import Paper from 'material-ui/Paper'
import { withStyles } from 'material-ui/styles'

const styles = theme => ({
		cardStyle: {
	  		minHeight:110, 
				overflow: 'hidden',
	  		width: 180,
	  		margin: 20,
	  		cursor: 'pointer',
	  		transition: `all 0.1s ease`,
	  		'&:hover': {
					transform: `scale(1.1)`,
					transition: `all 0.1s ease`
				}
  	}
})


class ReciterCard extends Component {
	constructor(props) {
		super(props)	
		this.state = {
			transform: 1.0
		}
	}

	render() {
		const {
			children,
			classes
		} = this.props
		console.log(classes)
		return (
			<div style={{minWidth: '20%'}}>
				<Paper 
					className={classes.cardStyle}
					zDepth={2} 
					transitionEnabled={true}
				>
					<img  style={{width: 180}}src="https://cdn.auth0.com/blog/react-js/react.png"/>
					<div> {(this.props.reciter) ?
						 <span style={{fontWeight: 400, fontSize: '18px'}}>
								{this.props.reciter.name}
							</span>: null}
					</div>
				</Paper>
			</div>
		)
	}
}

export default withStyles(styles)(ReciterCard)