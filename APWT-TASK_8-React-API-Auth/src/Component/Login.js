import React, { useState, useEffect } from "react";
import axios from 'axios';
import { useNavigate } from "react-router-dom"

const Login = () => {
      let [token, setToken] = useState("");
      let [email, setEmail] = useState("");
      let [password, setPassword] = useState("");
      const navigate = useNavigate("");


      const loginSubmit = () => {
            var obj = { email: email, password: password };
            axios.post("http://127.0.0.1:8000/api/login", obj)
                  .then(resp => {
                        var token = resp.data;
                        console.log(token);
                        var user = { userId: token.id, access_token: token.token };
                        localStorage.setItem('user', JSON.stringify(user));
                        if (token == "No user found") {
                              navigate('/login');
                        } else {
                              navigate('/CustomerList');
                        }
                        // console.log(localStorage.getItem('user'));
                  }).catch(err => {
                        console.log(err);
                  });
      }

      return (
            <div style={{ padding: "100px", background: "#D2B48C", margin: "100px" }}>
                  <form>
                        <input style={{ margin: "20px" }} type="text" value={email} onChange={(e) => setEmail(e.target.value)}></input><br></br>
                        <input style={{ margin: "20px" }} type="password" value={password} onChange={(e) => setPassword(e.target.value)}></input><br></br>

                  </form>
                  <button style={{ margin: "20px" }} onClick={loginSubmit}>Login</button>
            </div>

      )
}
export default Login;