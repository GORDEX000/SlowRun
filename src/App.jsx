import { useState } from 'react';
import Navbar from "./Nav/Navbar";
import Welcome from './components/Welcome';

function App() {
  const [count, setCount] = useState(0);

  return (
    <>
      <Navbar />
      <Welcome />
    </>
  );
}

export default App;
