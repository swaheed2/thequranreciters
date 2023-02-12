import React, {Component} from 'react'
import Paper from '@material-ui/core/Paper'
import { withStyles } from '@material-ui/styles'
import TextField from '@material-ui/core/TextField'
import IconButton from '@material-ui/core/IconButton'
import SearchIcon from '@material-ui/icons/Search';
import blue  from '@material-ui/core/colors/blue';

const styles = theme => ({
		root: {
			height: 48,
			display: 'flex',
			width: '70%',
			margin: '0 auto'
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
					<TextField  onChange={onChange} placeholder='Search '  className={classes.textFieldStyle} InputProps={{disableUnderline:true}} inputProps={{style: {color: blue[900], caretColor:blue[900]}}} fullWidth/>
					<div style={{padding:'1px', backgroundColor: 'white'}}><IconButton style={{height: '46px', borderRadius: '0%', backgroundColor: blue[400]}}><SearchIcon style={{color: 'white'}}/></IconButton></div>
				</Paper>
			</div>
		)
	}
}

export default withStyles(styles)(SearchBar)