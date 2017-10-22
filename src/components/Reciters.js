import React, { Component } from 'react'
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
	  },
	  imgStyle: {
	  	'@media all and (max-width: 1690px )':
			 { 
			 		height:'200px',
			 		width:'400px'
			 },
			'@media all and (max-width: 736px)': 
				{
					height:'180px',
			 		width:'300px'
				}
	  }
	})



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
				 	minHeight: '380px',
				 	paddingTop: '18px'
				 }} >
				 	<div>
						<div style={{margin: 0,textAlign:'center', height: '300px'}}>
							<img  src="https://assets-1f14.kxcdn.com/images/logo-lg-w.png" className={classes.imgStyle}/>
							<div style={{fontWeight: 500, fontSize: '18px', color: 'rgb(155, 202, 196)', marginTop: '12px'}}>The Quran Reciters</div>
							<div style={{marginTop: '32px'}}>
								<SearchBar style={{margin:"0 auto", width: '400px'}} onChange={this.handleChange}/>
							</div>
						</div>
					</div>
				</div>
			
				<RecitersList list={recitersList} style={{marginTop: 20}}/>
			</div>

		)
	}
}

export default withStyles(styles)(Reciters);
