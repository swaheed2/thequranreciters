import React, { Component } from 'react'
import TextField from 'material-ui/TextField'
import RecitersList from './RecitersList'
import ReciterCard from './ReciterCard'
import SearchBar from './SearchBar'
import { teal } from 'material-ui/colors';
import AppBar from 'material-ui/AppBar';
import Toolbar from 'material-ui/Toolbar';
import Typography from 'material-ui/Typography';
import IconButton from 'material-ui/IconButton';
import MenuIcon from 'material-ui-icons/Menu';
import { withStyles } from 'material-ui/styles';
import Button from 'material-ui/Button';

const styles = theme => ({
	root: {
	    width: '100%',
	  },
	  flex: {
	    flex: 1,
	  },
	  menuButton: {
	    marginLeft: -12,
	    marginRight: 20,
	  }
	})



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
		const { classes } = this.props;
		return (
			<div>
				<div className={classes.root}>
		      <AppBar position="static" color='white'>
		        <Toolbar>
		          <IconButton className={classes.menuButton} color="black" aria-label="Menu">
		            <MenuIcon />
		          </IconButton>
		          <Typography type="title" color="black" className={classes.flex}>
		            Title
		          </Typography>
		        </Toolbar>
		      </AppBar>
    		</div>
				<div style={{
					backgroundColor: teal[800],
				 	minHeight: '400px',
				 	display: 'flex',
				 	justifyContent: 'center',
				 	paddingTop: '18px'
				 }} >
				 	<div>
						<div style={{margin: 0, height: '300px'}}>
							<img  src="https://assets-1f14.kxcdn.com/images/logo-lg-w.png" style={{height:200, width:400}} />
							<div style={{fontWeight: 500, fontSize: '18px', color: 'rgb(155, 202, 196)',marginLeft: '128px', marginTop: '12px'}}>The Quran Reciters</div>
						</div>
						<div>
							<SearchBar onChange={this.handleChange}/>
						</div>
					</div>
				</div>
				<RecitersList list={recitersList} style={{marginTop: 20}}/>
			</div>

		)
	}
}

export default withStyles(styles)(Reciters);
