import React, { Component } from 'react';
import TextField from 'material-ui/TextField'

class Reciters extends Component {
	constructor(props) {
		super(props)
		this.handleChange = this.handleChange.bind(this);
	}
	componentDidMount() {
		this.props.fetchAllReciters()
	}
	handleChange(event) {
		console.log(event)
		this.props.filterList(event.target.value.toLowerCase())
	}
	render() {

		const recitersList = (this.props.showReciters) ? 
			this.props.showReciters.map(reciter => <li key={reciter.id}>{reciter.name}</li>) 
			: null
		return (
			<div>

				<TextField onChange={this.handleChange}/>
				<h3 style={{textAlign: 'center'}}>Reciters</h3>
				<ul style={{textAlign: 'center', listStyle: 'none'}}>
					{recitersList}
				</ul>
			</div>

		)
	}
}

export default Reciters