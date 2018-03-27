import React from 'react';
import './App.css';
import { BrowserRouter as Router, Route } from 'react-router-dom'
import { Home, ReciterDetails, AddReciter } from './containers'
import { MuiThemeProvider } from 'material-ui/styles'
import { theme } from './config'
import { AppShell } from './components'

const App = () => {
	return (
		<Router>
			<MuiThemeProvider theme={theme}>
				<AppShell>
					<Route exact path='/' component={Home} />
					<Route path='/reciters/:reciterId' component={ReciterDetails} />
					<Route path='/contact' render={() => (<h2>Contact</h2>)} />
					<Route path='/submission' render={() => (<h2>Submission</h2>)} />
					<Route path="/add-reciters" component={AddReciter} />
				</AppShell>
			</MuiThemeProvider>
		</Router>
	)
}


export default App;
