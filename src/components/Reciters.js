import React, { Component } from 'react';

class Reciters extends Component {
	constructor(props) {
		super(props)
	}
	componentDidMount() {
		this.props.fetchAllReciters()
	}
	render() {
		console.log(this.props)
		return(
			<div>Reciters</div>
		)
	}
}

export default Reciters