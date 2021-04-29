import React from 'react';
import { Link } from 'react-router-dom';
import useStore from '../../stores/countStore';

export default function About(){
    return (
        <>
            <h1>About!</h1>
            <Link to="/">
                Home
            </Link>
            <p>Same count: {useStore(state => state.count)}</p>
        </>
    )
}
