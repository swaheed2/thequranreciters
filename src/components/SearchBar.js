import React, {Component} from 'react'
import Paper from 'material-ui/Paper'
import { withStyles } from 'material-ui/styles'
import TextField from 'material-ui/TextField'
import IconButton from 'material-ui/IconButton'
import SearchIcon from 'material-ui-icons/Search';

const styles = theme => ({
		root: {
			height: 48,
			display: 'flex'
		},
		paperContainerStyle: {
			margin: '12px'
		}, 
		textFieldStyle: {
			marginTop: '12px',
			marginLeft: '8px'
		}
})

class SearchBar extends Component {
	constructor(props) {
		super(props)
	}
	render() {
		const {
			classes,
			onChange
		} = this.props

		return (
			<div className={classes.paperContainerStyle}> 
				<Paper classes={{root:classes.root}}>
					<TextField onChange={onChange} placeholder="Search" className={classes.textFieldStyle} InputProps={{disableUnderline:true}} fullWidth/>
					<IconButton><SearchIcon /></IconButton>
				</Paper>
			</div>
		)
	}
}

export default withStyles(styles)(SearchBar)