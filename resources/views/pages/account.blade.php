@extends('layout.mainlayout')

    @section('content')
       <div class="text-muted">
         <div class="container bg-light">
            <div class="row">
              <div class="col-xs-1 text-center">
                <h1>pfp</h1>
              </div>
              <div class="col-xs-11 text-center">
                <h1>Fujiwara Chika</h1><br>
              </div>
            </div>
          </div>
          <div class="container">
           <div class="row">
              <h1>Account Information</h1><br>
           </div>
           <div class="row">
              <div class="overflow-auto col-xs-12" id="user_details">
                <div class="row">
                  <form>
                    <div class="form-group">
                      <label for="usrID">Asbestos Certificate ID:</label>
                      <input id="usrID" class="form-control" type="text" placeholder="100001" readonly>
                    </div>
                    <div class="form-group">
                      <label for="accType">Account Type:</label>
                      <input id="accType" class="form-control" type="text" placeholder="Inspector" readonly>
                    </div>
                    <div class="form-group">
                      <label for="emailAddress">Email address:</label>
                      <input id="emailAddress" class="form-control" type="email" placeholder="fujiwara.chika@lovedetective.yo">
                    </div>
                    <div class="form-group">
                      <label for="foreName">First name:</label>
                      <input id="foreName" class="form-control" type="" placeholder="Chika">
                    </div>
                    <div class="form-group">
                      <label for="surName">Surname:</label>
                      <input id="surName" class="form-control" type="" placeholder="Fujiwara">
                    </div>
                    <div class="form-group">
                      <label for="dob">Date of Birth:</label>
                      <input id="dob" class="form-control" type="date" placeholder="15/02/1999">
                    </div>
                    <div class="form-group">
                      <label for="org">Employer:</label>
                      <input id="org" class="form-control" type="" placeholder="Fujiwara Corp">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                </div>

                <div class="row">
                  <form>
                    <div class="form-group">
                      <label for="certDate">Certificate Valid From:</label>
                      <input id="certDate" class="form-control" type="text" placeholder="20/05/2010" readonly>
                    </div>
                    <div class="form-group">
                      <label for="certExp">Certificate Valid To:</label>
                      <input id="certExp" class="form-control" type="text" placeholder="20/05/2020" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Renew</button>
                  </form>
                </div>

                <div class="row">
                  <form>
                    <div class="form-group">
                      <label for="pW">Password:</label>
                      <input id="pW" class="form-control" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="confPW">Confirm Password:</label>
                      <input id="confPW" class="form-control" type="password" placeholder="Confirm password">
                    </div>
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </form>
                </div>
              </div>
         </div>
       </div>
    @endsection
    <b></b>