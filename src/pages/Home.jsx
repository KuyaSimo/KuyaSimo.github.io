import React from "react";
import { useNavigate } from 'react-router-dom'
import '../App.css'

function Home() {
    const navigate = useNavigate();

    const handleNavigate = () => {
        navigate('/next');
    }

    return(
        <>
      <div className="">
        
     
      <h1>Psychometrician Mock Exam</h1>
      <div className="card">
        <button onClick={handleNavigate}>
          Start Exam
        </button>
        <p>
        </p>
      </div>
      <p className="read-the-docs">
        Exam is over 100 items. Good luck mahal ko!!!
      </p>
      </div>
    </>
    )
}

export default Home;