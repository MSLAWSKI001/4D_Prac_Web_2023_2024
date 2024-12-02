import React from 'react';

function Zadanie({ zadanie, oznaczUkonczone, usunZadanie }) {
  return (
    <li>
      <span
        style={{ textDecoration: zadanie.ukonczone ? 'line-through' : 'none', background: zadanie.ukonczone ? 'lime' : '' }}
        
        onClick={() => oznaczUkonczone(zadanie.id)}
      >
        {zadanie.text}
      </span>
      <button onClick={() => usunZadanie(zadanie.id)}>Usuń</button>
      <button onClick={() => oznaczUkonczone(zadanie.id)}>Ukonczone</button>
    </li>
  );
}

export default Zadanie;