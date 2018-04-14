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
		backgroundColor: 'transparent',
		'&:hover': {
			filter: 'brightness(120%)',
			transition: `all 0.2s ease`
		}
	},
	imageHolder: {
		width: '80px',
		height: '80px',
		borderRadius: '50%',
		overflow: 'hidden',
		border: '.5px solid #fff',
		margin: '0 auto'
	},
	cardTextHolder: {
		backgroundColor: 'transparent',
		height: '70px',
		overflow: 'hidden',
		display: 'flex',
		justifyContent: 'center',
		alignItems: 'center'
	},
	cardText: {
		padding: '20px 5px',
		textAlign: 'center',    
		fontSize: '14px',
		fontWeight: '450',
		color: grey[800]
	},
	cardReciter: {
		boxSizing: 'border-box'
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
		//console.log(this.props.imgUrl);
		const {
			classes
		} = this.props

		return (

			<div className={classes.cardReciter}>
				<Paper elevation={0}
					onClick={this.props.onClick}
					className={classes.cardStyle}
				>
					<div className={classes.imageHolder}>
						<img alt={this.props.reciter.name}
							style={{ height: '100%', width: '100%' }}
							src={this.props.imgUrl}></img>
					</div>
					<div className={classes.cardTextHolder}> {(this.props.reciter) ?
						<Typography className={classes.cardText} type="subheading">
							{this.props.reciter.name}
						</Typography> : null}
					</div>
				</Paper>
			</div>
		)
	}
}

export default withStyles(styles)(ReciterCard)
