import axios from 'axios';
import React, { useEffect, useState } from 'react';
import CustomerData from './CustomerData';
import Instance from './Instance';

const CustomerList = () => {


      const [users, setUsers] = useState([]);

      useEffect(() => {
            Instance.get("/admin/userList")
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