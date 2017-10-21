import React, { Component } from 'react'
import RecitersList from './RecitersList'
import ReciterCard from './ReciterCard'
import SearchBar from './SearchBar'

class Reciters extends Component {
	constructor(props) {
		super(props)
		this.handleChange = this.handleChange.bind(this);
	}
	componentDidMount() {
		this.props.fetchReciters()
	}
	handleChange(event) {
		this.props.fetchReciters(event.target.value.toLowerCase())
	}
	render() {
		const recitersList = this.props.recitersList
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