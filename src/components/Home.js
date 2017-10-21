import React, { Component } from 'react';

class Home extends Component {
	componentDidMount() {
		this.props.fetchReciters()
	}
	render() {
		console.log(this.props.recitersList)
		return(
			<div>Home</div>
		)
	}
}

export default Home