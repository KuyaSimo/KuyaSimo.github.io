import React from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import Home from './pages/Home'
import ExamPage from './pages/ExamPage'
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';

function App() {
 

  return (
    <>
    <Router>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/next" element={<ExamPage />} />
      </Routes>
    </Router>
    </>
  )
}

export default App
