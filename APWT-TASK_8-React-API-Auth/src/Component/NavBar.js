import React from 'react';
import { Link } from 'react-router-dom';
const NavBar = () => {
      return (
            <div style={{ marginBottom: "57px" }}>
                  <nav className="navbar navbar-expand navbar-dark bg-secondary  fixed-top" style={{ padding: "1rem" }}>
                        <div className="container-fluid container">

                              <div className="navbar-nav font-weight-bold ms-auto ">
                                    <Link className="nav-link px-3 text-white fw-bold" to="/">Home</Link>
                                    <Link className="nav-link px-3 text-white fw-bold" to="/contact">Contact</Link>
                                    <Link className="nav-link px-3 text-white fw-bold" to="/CustomerList">CustomerList</Link>
                                    <Link className="nav-link px-3 text-white fw-bold" to="/login" > < b > Login </b></Link >
                                    <Link className="nav-link px-3 text-white fw-bold" to="/signout" > < b > SignOut </b></Link >
                              </div>
                        </div>
                  </nav>
            </div>
      );
};

export default NavBar;