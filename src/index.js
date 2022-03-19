import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom'
import ChangeLog from './components/changelog/ChangeLog';
import About from './components/about/about';

ReactDOM.render(
  <React.StrictMode>
    <Router>
      <Routes>
        <Route path='*' element={<App />} />
        <Route path='/ChangeLog' element={<ChangeLog />} />
        <Route path='/About' element={<About />} />

      </Routes>

    </Router>

  </React.StrictMode>,
  document.getElementById('root')
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
