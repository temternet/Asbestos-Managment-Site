@extends('layout.mainlayout')

    @section('content')
       <div class="text-muted">
         <div class="container bg-light">
            <div class="row">
              <div class = "container" id="user_inf">
                <div class="row">
                  <div class="col-xs-1 text-center">
                    <h1>pfp</h1><br>
                  </div>
                  <div class="col-xs-4 text-center">
                    <h1>Fujiwara Chika</h1><br>
                  </div>
                  <div class="col-xs-7 text-left">
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
          </div>
          <div class="container">
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
                    @foreach($data as $row)
                    <tr>
                      <td></td>
<<<<<<< HEAD
                      <td>{{$row['orgName']}}</td>                    
                      <td>{{$row['premisesAdr' + 'addressL1' + 'addressL2']}}</td>
                      <td>{{$row['foreName' + 'surName']}}</td>
                      <td>{{$row['monitorDate']}}</td>
=======
                      <td>{{$row['orgs'['orgName']]}}</td>                    
                      <td>{{$row['premises'['premisesAdr'] + 'site'['addressL1'] + 'site'['addressL2']]}}</td>
                      <td>{{$row['usr'['foreName'] + 'usr'['surName']]}}</td>
                      <td>{{$row['plans'['monitorDate']]}}</td>
>>>>>>> 0a7a6c9e55d2f5c3fef11a544805d29d6d1e33a4
                    </tr>
                    @endforeach
                  </thread>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td><a href="/premises">Placeholder Org</a></td>
                      <td><a href="/premises">Unit 1, Some Address, AA11 1AA</a></td>
                      <td><a href="/premises">Shinomiya Kaguya</a></td>
                      <td><a href="/premises">20/4/2020</a></td>
                    </tr>
                  <?php  ?>
                </table>
              </div>
           </div>
         </div>
       </div>
    @endsection
    <b></b>