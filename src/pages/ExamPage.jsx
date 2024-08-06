import React, { Component } from 'react';
import Question from './Question';
import qBank from './QuestionBank';
import '../App.css';

class ExamPage extends Component {
  constructor(props) {
    super(props);
    this.state = {
      questionBank: qBank,
      currentPage: 0,
      selectedOptions: Array(qBank.length).fill(''),
      score: 0,
      quizEnd: false,
    };
  }

  handleOptionChange = (e, index) => {
    const { selectedOptions } = this.state;
    const newSelectedOptions = [...selectedOptions];
    newSelectedOptions[index] = e.target.value;
    this.setState({ selectedOptions: newSelectedOptions });
  };

  handleFormSubmit = (e) => {
    e.preventDefault();
    this.checkAnswers();
    this.handleNextPage();
  };

  checkAnswers = () => {
    const { questionBank, currentPage, selectedOptions, score } = this.state;
    const pageQuestions = questionBank.slice(currentPage * 10, (currentPage + 1) * 10);
    let newScore = score;

    pageQuestions.forEach((question, index) => {
      if (selectedOptions[currentPage * 10 + index] === question.answer) {
        newScore += 1;
      }
    });

    this.setState({ score: newScore });
  };

  handleNextPage = () => {
    const { currentPage, questionBank } = this.state;
    if ((currentPage + 1) * 10 < questionBank.length) {
      this.setState((prevState) => ({
        currentPage: prevState.currentPage + 1,
      }));
    } else {
      this.setState({ quizEnd: true });
    }
  };

  handlePreviousPage = () => {
    const { currentPage } = this.state;
    if (currentPage > 0) {
      this.setState((prevState) => ({
        currentPage: prevState.currentPage - 1,
      }));
    }
  };

  render() {
    const { questionBank, currentPage, selectedOptions, score, quizEnd } = this.state;
    const pageQuestions = questionBank.slice(currentPage * 10, (currentPage + 1) * 10);
    const totalQuestions = questionBank.length;
    const percentageScore = ((score / totalQuestions) * 100).toFixed(2);

    return (
      <div className="App optionCard">
        <h1 className="app-title">Psychometrician Exam</h1>
        {!quizEnd ? (
          <>
            <form onSubmit={this.handleFormSubmit}>
              {pageQuestions.map((question, index) => (
                <Question
                  key={question.id}
                  question={question}
                  selectedOption={selectedOptions[currentPage * 10 + index]}
                  onOptionChange={(e) => this.handleOptionChange(e, currentPage * 10 + index)}
                />
              ))}
              <div className="pagination-buttons">
                <button
                  onClick={this.handlePreviousPage}
                  disabled={currentPage === 0}
                  className="btn btn-secondary"
                >
                  Previous
                </button>
                <button type="submit" className="btn btn-primary">
                  {currentPage * 10 + 10 < questionBank.length ? 'Next' : 'Finish'}
                </button>
              </div>
            </form>
          </>
        ) : (
          <div className="score">
            <h2>Your score is: {score} out of {totalQuestions}</h2>
            <h2>Percentage: {percentageScore}%</h2>
          </div>
        )}
      </div>
    );
  }
}

export default ExamPage;
