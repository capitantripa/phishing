import React from 'react';
import { Route, Switch } from 'react-router-dom';
import 'reset-css';
import './app.css';

import Profile from './profile/index.jsx';

function App (){
  return (
    <Switch>
      <Route path="/" component={Profile} />
    </Switch>
  )
}

export default App;
