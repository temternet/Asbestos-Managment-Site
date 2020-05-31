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
                      <tr class="{{($row->monitorDate == date('Ymd')) ?  'table-info' : ''}}">
                        <td><a href="/premises/{{$row->premisesID}}">{{ $num++ }}</a></td>
                        <td><a href="/premises/{{$row->premisesID}}">{{ $row->orgName }}</a></td>                    
                        <td><a href="/premises/{{$row->premisesID}}">{{ $row->premisesAdr . ', ' . $row->addressL1 . ', ' . 
                        $row->addressL2 . ', ' . $row->town . ', ' . $row->county . ', ' . $row->postCode }}</a></td>
                        <td><a href="/premises/{{$row->premisesID}}">{{ $row->foreName . ' ' . $row->surName }}</td>
                        <td><a href="/premises/{{$row->premisesID}}">{{ $row->monitorDate }}</a></td>
                      </tr>
                    @endforeach
                  </thread>
                  <tbody>
                </table>
              </div>
           </div>
         </div>
       </div>
    @endsection
    <b></b>