import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';
import { BrowserRouter as Router, Route} from 'react-router-dom'
import Home from './containers/Home'
import Reciters from './containers/Reciters'
import Contact from './containers/Contact'
import Submission from './containers/Submission'



const App = () => ( 
  <Router>
    <div>
      <Route exact path= '/' component={Home} />
      <Route path= '/reciters' render = {()=> (<h2>Reciters</h2>)} />
      <Route path= '/reciters/:reciter' render = {(props)=> (<h2>Reciter # {props.match.params.reciter}</h2>)} />
      <Route path= '/contact' render = {()=> (<h2>Contact</h2>)} />
      <Route path= '/submission' render = {()=> (<h2>Submission</h2>)} />
    </div>
  </Router>
)

export default App;
