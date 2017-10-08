import React, { Component } from 'react';
import TextField from 'material-ui/TextField'
import RecitersList from './RecitersList'
import ReciterCard from './ReciterCard'

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
		// const recitersList = (this.props.showReciters) ? this.props.showReciters.map(reciter => <li key={reciter.id}>{reciter.name}</li>) : null
		const recitersList = this.props.showReciters ? this.props.showReciters : null
		const sampleReciter = (recitersList) ? recitersList[0] : null;
		console.log(recitersList, 'reciters list')
		return (
			<div>
				<TextField onChange={this.handleChange}/>
				<h3 style={{textAlign: 'center'}}>Reciters</h3>
				<RecitersList list={recitersList} />
			</div>

		)
	}
}

export default Reciters