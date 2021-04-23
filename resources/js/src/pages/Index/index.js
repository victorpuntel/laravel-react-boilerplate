import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';

export default function Index(){

    const [count, setCount] = useState(0);

    useEffect(() => {
        console.log('log do effect', count);

    }, [count]);

    return (
        <>
            <h1>Index!</h1>
            <Link to="/about">
                About
            </Link>
            <br/>
            <button onClick={() => setCount(count+1)}>Add count</button>
        </>
    )
}
