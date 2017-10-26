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
 			filter:'brightness(120%)',
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
		},
		cardReciter: {
			
			boxSizing: 'border-box',
			padding: '7px',
			'@media all and (max-width: 1690px)':
			 { 
			 		width:'20%'
			 },
			'@media all and (max-width: 1280px)': 
				{
					width: '20%'
				},
			'@media all and (max-width: 980px)': 
				{
					width: '33.33%'
				},
			'@media all and (max-width: 736px)': 
				{
					width: '50%'
				}
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
			classes
		} = this.props

		return (
			
			<div
				className={classes.cardReciter}
				>
				<Paper 
					className={classes.cardStyle}
					zDepth={3} 
					transitionEnabled={true}
				>
						<div style={{height: '220px', overflow: 'hidden'}}>
							<img style={{height: 'auto', width: '100%'}} src={`http://thequranreciters.com/reciters/images/lg/${this.props.reciter.id}-lg.jpg`}></img>
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
