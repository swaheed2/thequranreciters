import React from 'react';
import './App.css';
import { BrowserRouter as Router, Route} from 'react-router-dom'
import Home from './containers/Home'
import Reciters from './containers/Reciters'
import { MuiThemeProvider, createMuiTheme } from 'material-ui/styles';
const theme = createMuiTheme();



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
	    </div>
    </MuiThemeProvider>
  </Router>
)}

export default App;
