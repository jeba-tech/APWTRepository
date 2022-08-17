import logo from './logo.svg';
import './App.css';
import { Route, Routes } from 'react-router-dom';
import Contact from './Component/Contact';
import Home from './Component/Home';
import Footer from './Component/Footer';
import CustomerList from './Component/CustomerList';
import CustomerDetails from './Component/CustomerDetails';
import NavBar from './Component/NavBar';
import Login from './Component/Login';
import SignOut from './Component/SignOut';

function App() {
  return (
    <div>

      <NavBar />
      <Routes>

        <Route path="/" element={<Home />}></Route>
        <Route path="/CustomerDetails/:id/:name/:cus_id/:dob/:email/:phone" element={<CustomerDetails />}></Route>
        <Route path="/CustomerList" element={<CustomerList />}></Route>
        <Route path="/contact" element={<Contact />}></Route>
        <Route exact path='/login' element={<Login />} />
        <Route exact path='/signout' element={<SignOut />} />


      </Routes>
      <Footer />
    </div>
  );
}

export default App;
