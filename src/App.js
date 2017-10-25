import React, { Component } from 'react';
import './App.css';
import { BrowserRouter as Router, Route, Redirect } from 'react-router-dom'
import { Home, Reciters, AddReciter } from './containers'
import { MuiThemeProvider } from 'material-ui/styles'
import { theme } from './config'

const App = () => {
	return (
		<Router>
			<MuiThemeProvider theme={theme}>
				<div>
					<Route exact path='/' component={Home} />
					<Route path='/reciters' component={Reciters} />
					<Route path='/reciters/:reciter' render={(props) => (<h2>Reciter # {props.match.params.reciter}</h2>)} />
					<Route path='/contact' render={() => (<h2>Contact</h2>)} />
					<Route path='/submission' render={() => (<h2>Submission</h2>)} />
					<Route path="/add-reciters" component={AddReciter} />
				</div>
			</MuiThemeProvider>
		</Router>
	)
}


export default App;
