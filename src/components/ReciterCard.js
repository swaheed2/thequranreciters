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
			filter: 'brightness(120%)',
			transition: `all 0.2s ease`
		}
	},
	cardTextHolder: {
		backgroundColor: grey[100],
		margin: '0 auto',
		minHeight: '60px'
	},
	cardText: {
		padding: '20px 10px',
		textAlign: 'center'
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

		const {
			classes
		} = this.props

		return (

			<div className={classes.cardReciter}>
				<Paper
					onClick={this.props.onClick}
					className={classes.cardStyle}
				>
					<div style={{ height: '200px', overflow: 'hidden' }}>
						<img style={{ height: 'auto', width: '100%' }}
							src={`http://thequranreciters.com/reciters/images/lg/${this.props.reciter.id}-lg.jpg`}></img>
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
