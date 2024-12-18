import React, { useState } from 'react';
import Zadanie from './Zadanie';

function ListaZadan() {
  const [zadania, setZadania] = useState([]);
  const [noweZadanie, setNoweZadanie] = useState('');

  const dodajZadanie = () => {
    if (noweZadanie.trim()) {
      const nowe = { id: Date.now(), text: noweZadanie, ukonczone: false };
      setZadania([...zadania, nowe]);
      setNoweZadanie(''); // reset pola tekstowego
    }
  };

  const oznaczUkonczone = (id) => {
    setZadania(
      zadania.map(zadanie =>
        zadanie.id === id ? { ...zadanie, ukonczone: !zadanie.ukonczone } : zadanie
      )
    );
  };

  const usunZadanie = (id) => {
    setZadania(zadania.filter(zadanie => zadanie.id !== id));
  };

  return (
    <div>
      <h1>Lista Zadań</h1>
      <input
        type="text"
        value={noweZadanie}
        onChange={(e) => setNoweZadanie(e.target.value)}
        placeholder="Dodaj zadanie"
      />
      <button onClick={dodajZadanie}>Dodaj</button>
      <ul>
        {zadania.map(zadanie => (
          <Zadanie
            key={zadanie.id}
            zadanie={zadanie}
            oznaczUkonczone={oznaczUkonczone}
            usunZadanie={usunZadanie}
          />
        ))}
      </ul>
    </div>
  );
}

export default ListaZadan;