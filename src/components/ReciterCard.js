import React, { Component } from 'react';
import Paper from 'material-ui/Paper'
import Typography from 'material-ui/Typography';
import { withStyles } from 'material-ui/styles'
import { grey } from 'material-ui/colors';

const styles = theme => ({
		cardStyle: {
  		width: '100%',
  		cursor: 'pointer',
  		transition: `all 0.1s ease`,
 		minHeight: '250px',
 		backgroundColor: grey[100], 
 		'&:hover': {
 			opacity: 0.8,
 			transition: `all 0.2s ease`
 		}
  		
  	},
		cardTextHolder: {
			backgroundColor: grey[100],
			margin: '0 auto',
			width: '180px',
			minHeight: '60px'
		}, 
		cardHolderStyle: {
			display:'inline-block', 
			width:'18%',
			minWidth: '150px',
			margin: '5px', 
			verticalAlign:'top',
			'@media (max-width: 900px)': {
				display:'inline-block', 
				width:'25%',
				minWidth: '150px',
				margin: '5px', 
				verticalAlign:'top',
    },
		}
})


class ReciterCard extends Component {
	constructor(props) {
		super(props)	
		this.state = {
			opacity: 1
		}
	}

	render() {
		const {
			children,
			theme,
			classes
		} = this.props
		
		return (
			
			<div
				
				style={{minWidth: '280px', paddingTop: '5px', paddingBottom: '5px',  verticalAlign:'top'}}>
				<Paper 
					className={classes.cardStyle}
					zDepth={3} 
					transitionEnabled={true}
				>
						<div style={{minHeight: '100px'}}>
							<img style={{width: '100%'}}src="http://thequranreciters.com/reciters/images/mishary-alafasy.jpg"></img>
						</div>
						<div className={classes.cardTextHolder}> {(this.props.reciter) ?
							 <Typography style={{textAlign: 'center', fontWeight: 300, marginTop: '4px' }} type="subheading">
									{this.props.reciter.name}
								</Typography>: null}
						</div>
				</Paper>
			</div>
		)
	}
}

export default withStyles(styles)(ReciterCard)
