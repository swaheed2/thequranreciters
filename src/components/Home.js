import React, { Component } from 'react';
class Home extends Component {
	constructor(props) {
		super(props)
	}
	componentDidMount() {
		this.props.fetchAllReciters()
	}
	render() {
		console.log(this.props)
		return(
			<div>Home</div>
		)
	}
}

export default Home