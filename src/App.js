import React from 'react';
import './App.css';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom'
import { Home, ReciterDetails, AddReciter } from './containers'
import { MuiThemeProvider } from 'material-ui/styles'
import { theme } from './config'
import { AppShell } from './components'
import Contact from './components/Contact';
import ReciteQuran from './components/ReciteQuran';

const App = () => {
	return (
		<Router>
			<MuiThemeProvider theme={theme}>
				<AppShell>
					<Switch>
						<Route exact path='/reciters/:reciterId' component={ReciterDetails} />
						<Route exact path='/contact' component={Contact} />
						<Route exact path='/recite' component={ReciteQuran} />
						<Route exact path='/submission' render={() => (<h2>Submission</h2>)} />
						<Route exact path="/add-reciters" component={AddReciter} />
						<Route component={Home} />
					</Switch>
				</AppShell>
			</MuiThemeProvider>
		</Router>
	)
}


export default App;
