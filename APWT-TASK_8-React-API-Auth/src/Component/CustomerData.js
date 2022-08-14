import React from 'react';
import { Link } from 'react-router-dom';

const CustomerData = (props) => {
      const { id, name, cus_id, dob, email, phone } = props.users;



      return (




            <div className="col-4 row no-gutters mb-3">
                  <div className="card-group">
                        <div className="card">

                              <div className="card-body">
                                    <div>
                                          <h5 className="card-title text-success">User ID:{id}</h5>
                                          <h5 className="card-title text-success">Name: {name}</h5>
                                          <h6 className="card-title ms-auto mt-1">Email: {email}</h6>
                                    </div>

                                    <div className="d-flex">
                                          <p className="card-text"><small className="text-secondary fw-bold">Customer ID:{cus_id}</small></p>

                                    </div>

                                    <Link className="btn btn-sm btn-dark mt-4" to={"/CustomerDetails" + "/" + id + "/" + name + "/" + cus_id + "/" + dob + "/" + email + "/" + phone} > Details</Link >
                              </div>
                        </div>
                  </div>
            </div>
      );
};
//export
export default CustomerData;