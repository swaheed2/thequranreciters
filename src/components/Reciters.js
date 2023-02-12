import React, { Component } from 'react'
import RecitersList from './RecitersList'
import { withStyles } from '@material-ui/styles';

const styles = theme => ({
})




class Reciters extends Component {
	constructor(props) {
		super(props)
		this.handleChange = this.handleChange.bind(this);
	}
	componentDidMount() {
		//this.props.fetchReciters()
	}
	handleChange(event) {
		//this.props.fetchReciters(event.target.value.toLowerCase())
	}
	render() {
		const recitersList = this.props.recitersList
		return (
			<div>
				<RecitersList list={recitersList} style={{ marginTop: 20 }} />
			</div>

		)
	}
}

export default withStyles(styles)(Reciters);
