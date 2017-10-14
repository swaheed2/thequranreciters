import React, { Component } from 'react';
import Paper from 'material-ui/Paper'
import Typography from 'material-ui/Typography';
import { withStyles } from 'material-ui/styles'

const styles = theme => ({
		cardStyle: {
	  		width: 220,
	  		cursor: 'pointer',
	  		transition: `all 0.1s ease`,
	  		overflow:'hidden',
	  		display: 'block',
	  		margin: '8px',
	  		minHeight: '268px',
	  		'&:hover': {
					transform: `scale(1.1)`,
					transition: `all 0.1s ease`
				},
  	},
		cardTextHolder: {
			backgroundColor: 'white',
			margin: '0 auto',
			width: '180px',
			minHeight: '34px'
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
			theme,
			classes
		} = this.props
		
		return (
			
			<div  style={{margin: '11px'}}>
				<Paper 
					className={classes.cardStyle}
					zDepth={3} 
					transitionEnabled={true}
				>
					<div>
						<img style={{width: '100%'}}src="http://thequranreciters.com/reciters/images/abdul-bari-al-thubaiti.jpg"></img>
						
					</div>
					<div className={classes.cardTextHolder}> {(this.props.reciter) ?
						 <Typography style={{textAlign: 'center', fontWeight: 600}} type="subheading">
								{this.props.reciter.name}
							</Typography>: null}
					</div>
				</Paper>
				
				</div>
			
		)
	}
}

export default withStyles(styles)(ReciterCard)
