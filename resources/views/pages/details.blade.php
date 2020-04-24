@extends('layout.mainlayout')

    @section('content')
      <div class="text-muted">
        <div class="row">

          <div class="container bg-light">
           <div class="row">
              <h1>Asbestos Records</h1><br>
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


        <div class="container bg-light">
          <div class="row">
            <h1>Asbestos Management Plan</h1><br>
          </div>
        </div>
      </div>
    @endsection
    <b></b>