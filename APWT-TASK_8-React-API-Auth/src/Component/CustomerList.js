import axios from 'axios';
import React, { useEffect, useState } from 'react';
import CustomerData from './CustomerData';

const CustomerList = () => {


      const [users, setUsers] = useState([]);

      useEffect(() => {
            axios.get("http://127.0.0.1:8000/api/admin/userList")
                  .then(resp => {
                        console.log(resp);
                        setUsers(resp.data);
                  }).catch(err => {
                        console.log(err);
                  });
      }, []);
      return (
            <div className="container" style={{ padding: "10px", background: "#D2B48C" }}>
                  <div className="row">
                        {
                              users.map(users =>
                                    <CustomerData
                                          key={users.id}
                                          users={users}
                                    ></CustomerData>
                              )
                        }
                  </div>



            </div>
      );
};

export default CustomerList;