import React from 'react';

function Options({ options, selectedOption, onOptionChange }) {
  return (
    <div>
      {options.map((option, index) => (
        <div key={index}>
          <label>
            <input
              type="radio"
              value={option}
              checked={selectedOption === option}
              onChange={onOptionChange}
            />
            {option}
          </label>
        </div>
      ))}
    </div>
  );
}

export default Options;