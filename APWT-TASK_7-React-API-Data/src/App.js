import logo from './logo.svg';
import './App.css';
import { Route, Routes } from 'react-router-dom';
import Contact from './Component/Contact';
import Home from './Component/Home';
import Footer from './Component/Footer';
import CustomerList from './Component/CustomerList';
import CustomerDetails from './Component/CustomerDetails';
import NavBar from './Component/NavBar';

function App() {
  return (
    <div>

      <NavBar />
      <Routes>

        <Route path="/" element={<Home />}></Route>
        <Route path="/CustomerDetails/:id/:name/:cus_id/:dob/:email/:phone" element={<CustomerDetails />}></Route>
        <Route path="/CustomerList" element={<CustomerList />}></Route>
        <Route path="/contact" element={<Contact />}></Route>


      </Routes>
      <Footer />
    </div>
  );
}

export default App;
