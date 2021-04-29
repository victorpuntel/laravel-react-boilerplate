import React from 'react';
import { Link } from 'react-router-dom';
import useStore from '../../stores/countStore';

export default function Index(){

    return (
        <>
            <h1>Index!</h1>
            <Link to="/about">
                About
            </Link>
            <br/>
            <p>Count: {useStore(state => state.count)}</p>
            <button onClick={useStore(state => state.increaseCount)}>Add count</button>
        </>
    )
}
