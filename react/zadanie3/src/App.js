
import './App.css';
function Powitanie(props) {
  return <h1>Witaj, {props.imie}!</h1>
}
function App() {
  return (
    <div className="App">
      <header className="App-header">
        <Powitanie imie ="Jan"/>
        <Powitanie imie ="Anna"/>
      </header>
    </div>
  );
}

export default App;
