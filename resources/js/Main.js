import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Route, Routes } from "react-router-dom";
import Example from './components/Example'

const Main = () => {

    return(
        <BrowserRouter>
            <Routes>
                <Route exact path="/"  element={<Example/>} />
            </Routes>
        </BrowserRouter>
    )
}

export default Main;
  
if (document.getElementById('app')) {
    ReactDOM.render(<Main />, document.getElementById('app'));
}