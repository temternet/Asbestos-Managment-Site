@extends('layout.mainlayout')

    @section('content')
       <div class="text-muted">
         <div class="container bg-light">
            <div class="row">
              <div class = "container" id="user_inf">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <h1>Fujiwara Chika</h1><br>
                  </div>
                  <div class="col-xs-8 text-left">
                    <h2>Email: fujiwara.chika@lovedetective.yo</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-3 text-center">
                    <p>Certificate ID: 100001</p>
                  </div>
                  <div class="col-xs-9 text-left">
                    <p>Type: Inspector</p>
                  </div>
                </div>
              </div>
           </div>
           <div class="row">
              <h1>Registered Buildings</h1><br>
           </div>
           <div class="row">
              <div class="overflow-auto" id="building_register">
                <table class="table">
                  <thread>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Organisation</th>
                      <th scope="col">Address</th>
                      <th scope="col">Dutyholder</th>
                      <th scope="col">Next Monitor Date</th>
                    </tr>
                  </thread>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Placeholder Org</td>
                      <td>Unit 1, Some Address, AA11 1AA</td>
                      <td>Shinomiya Kaguya</td>
                      <td>20/4/2020</td>
                    </tr>
                  <?php  ?>
                </table>
              </div>
           </div>
         </div>
       </div>
    @endsection
    <b></b>