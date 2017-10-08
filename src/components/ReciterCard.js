import React, { Component } from 'react';
import Paper from 'material-ui/Paper'

class ReciterCard extends Component {
	constructor(props) {
		super(props)	
		this.state = {
			transform: 1.0
		}
	}

	render() {
		const cardStyle = {
  		minHeight:110, 
			overflow: 'hidden',
  		width: 180,
  		margin: 20,
  		cursor: 'pointer',
  		transform: `scale(${this.state.transform})`
		};
		const {
			children
		} = this.props
		return (
			<Paper 
				style={cardStyle}
				zDepth={2} 
				transitionEnabled={true}
				onMouseOver={() => {this.setState({transform: 1.1})}}
				onMouseOut={() => {this.setState({transform: 1.0})}}
			>
				<img  style={{width: 180}}src="http://thequranreciters.com/reciters/images/abdul-bari-al-thubaiti.jpg" />
				<div> {(this.props.reciter) ?
					 <span style={{fontWeight: 400, fontSize: '18px'}}>
							{this.props.reciter.name}
						</span>: null}
				</div>
			</Paper>
		)
	}
}

export default ReciterCard