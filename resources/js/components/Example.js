import axios from 'axios';
import React, { useState } from 'react';
import ReactDOM from 'react-dom';

function Example() {
    const[posts,setposts]=useState([])
    function getdata(){
        axios.get('http://127.0.0.1:8000/api/list')
        .then((response)=>{
                console.log(response.data)
                setposts(response.data) 
        }).catch((error)=>{
            console.log(error);
            
        })}

        const titles=posts.map((post)=>{
            return(
                <div>
                <h1>{post.title}</h1>
                </div>
            )
        })
    
    return (
       
                        <div>
                        <button onClick ={getdata}>Get Data</button>
                        {titles}
                        </div>
                
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
