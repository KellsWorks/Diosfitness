import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Routes } from "react-router-dom";
import '../css/app.css'
import './css/style.scss'
import Dashboard from './pages/Dashboard';

const Main = () => {

    return(
        <BrowserRouter>
            <Routes>
                <Route exact path="/"  element={<Dashboard/>} />
            </Routes>
        </BrowserRouter>
    )
}

export default Main;
  
if (document.getElementById('app')) {
    ReactDOM.render(<Main />, document.getElementById('app'));
}