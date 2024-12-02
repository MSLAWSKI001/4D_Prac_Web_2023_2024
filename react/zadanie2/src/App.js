import React, {useState} from 'react';
import './App.css';
function App() {
    const [licznik, setLicznik] = useState(0);
    return (
    <div id="licznik">
        <h1>Licznik: {licznik}</h1>
        <button onClick={() => setLicznik(licznik+1)}>Zwiększ licznik</button>
    </div>
  );
}

export default App;