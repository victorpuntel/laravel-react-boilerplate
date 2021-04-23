import React from 'react';
import { BrowserRouter, Route } from 'react-router-dom';

import Index from './src/pages/Index';
import About from './src/pages/About';

export default function Routes(){
    return (
        <BrowserRouter>
            <Route path="/" component={Index} exact />
            <Route path="/about" component={About} />
        </BrowserRouter>
    )
}
