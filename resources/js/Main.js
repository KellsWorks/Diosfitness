import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Routes } from "react-router-dom";
import '../css/app.css'
import './css/style.scss'
import Customers from './pages/customers';
import Dashboard from './pages/Dashboard';

const Main = () => {

    return(
        <BrowserRouter>
            <Routes>
                <Route exact path="/"  element={<Dashboard/>} />
                <Route exact path="/customers"  element={<Customers/>} />
            </Routes>
        </BrowserRouter>
    )
}

export default Main;
  
if (document.getElementById('app')) {
    ReactDOM.render(<Main />, document.getElementById('app'));
}