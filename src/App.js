import React, {Component} from 'react';
import './App.css';
import { BrowserRouter as Router, Route, Redirect } from 'react-router-dom'
import Home from './containers/Home'
import Reciters from './containers/Reciters'
import { MuiThemeProvider, createMuiTheme } from 'material-ui/styles';
import { teal, green, red } from 'material-ui/colors';
import AddReciters from './containers/AddReciters'
import TextField from 'material-ui/TextField'
import Button from 'material-ui/Button'

const theme = createMuiTheme({
	palette: {
		primary: teal,
		secondary: green,
		error: red
	},
	primary: teal[800]
});


const fakeAuth = {
  isAuthenticated: false,
  authenticate(cb) {
    this.isAuthenticated = true
    setTimeout(cb, 100) // fake async
  },
  signout(cb) {
    this.isAuthenticated = false
    setTimeout(cb, 100)
  }
}
const Protected = () => <h3>Protected</h3>
const PrivateRoute = ({ component: Component, ...rest }) => (
  <Route {...rest} render={props => (
    fakeAuth.isAuthenticated ? (
      <Component {...props}/>
    ) : (
      <Redirect to={{
        pathname: '/login',
        state: { from: props.location }
      }}/>
    )
  )}/>
)

class Login extends Component {
		state = {
    	redirectToReferrer: false,
    	value: '',
    	error:false
  	}
  	handleChange = (e) => {
  		this.setState({
  			value: e.target.value
  		})
  	}
  	handleSubmit = (event) => {
  		event.preventDefault()
  		console.log(event.target.value)
  		
  			fakeAuth.authenticate(() => {
	      	this.setState({ redirectToReferrer: true })
	    	}) 
  		
  	}	

	render() {
		 const { from } = this.props.location.state || { from: { pathname: '/' } }
    const { redirectToReferrer } = this.state
    
    if (redirectToReferrer) {
      return (
        <Redirect to={from}/>
      )
    }
		return (
			<div style={{marginLeft: '11px'}}>
				<div>
					<h4>Enter password to add reciters</h4>
				</div>
				 <form onSubmit={this.handleSubmit}>
	        
	          
	        <TextField error={this.state.error} label="Password" type="password" value={this.state.value} onChange={this.handleChange} />
	        
	        <Button style={{marginLeft: '11px'}} color="primary" raised  type="submit">
	        	Submit
	        </Button>
	        
	       
	      </form>
	     </div>

			
		)
	}
}

const App = () => {

console.log(theme)
  return(
  <Router>
  	<MuiThemeProvider theme={theme}>
	    <div>
	      <Route exact path= '/' component={Home} />
	      <Route path= '/reciters' component={Reciters} />
	      <Route path= '/reciters/:reciter' render = {(props)=> (<h2>Reciter # {props.match.params.reciter}</h2>)} />
	      <Route path= '/contact' render = {()=> (<h2>Contact</h2>)} />
	      <Route path= '/submission' render = {()=> (<h2>Submission</h2>)} />
	      <Route path="/login" component={Login}/>
      	  <PrivateRoute path="/add-reciters" component={AddReciters}/>
	    </div>
    </MuiThemeProvider>
  </Router>
)}


export default App;
