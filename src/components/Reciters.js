import React, { Component } from 'react'
import TextField from 'material-ui/TextField'
import RecitersList from './RecitersList'
import ReciterCard from './ReciterCard'
import SearchBar from './SearchBar'

class Reciters extends Component {
	constructor(props) {
		super(props)
		this.handleChange = this.handleChange.bind(this);
	}
	componentDidMount() {
		this.props.fetchAllReciters()
	}
	handleChange(event) {
		this.props.filterList(event.target.value.toLowerCase())
	}
	render() {
		// const recitersList = (this.props.showReciters) ? this.props.showReciters.map(reciter => <li key={reciter.id}>{reciter.name}</li>) : null
		const recitersList = this.props.showReciters ? this.props.showReciters : null
		const sampleReciter = (recitersList) ? recitersList[0] : null;
		console.log(recitersList, 'reciters list')
		return (
			<div>
				<h3 style={{textAlign: 'center'}}>Reciters</h3>
				<SearchBar onChange={this.handleChange}/>
				<RecitersList list={recitersList} style={{marginTop: 20}}/>
			</div>

		)
	}
}

export default Reciters