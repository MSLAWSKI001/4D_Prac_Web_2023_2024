import React, {useState, useEffect} from 'react'
import './App.css';

function App() {
  const [licznik, setLicznik] = useState(0);

  useEffect(() => {
    document.title = `Kliknięto ${licznik} razy`;
  }, [licznik]);
  return (
    <div className="App">
      <header className="App-header">
        <h1>Licznik: {licznik}</h1>
        <button onClick={() => setLicznik(licznik+1)}>Zwiększ licznik</button>
      </header>
    </div>
  );
}

export default App;
