@extends('layout.mainlayout')

    @section('content')
       <div class="album text-muted">
         <div class="container">
            <div class="row">
              <div class = "container" id="user_inf">
                <div class="row">
                  <h1>Fujiwara Chika</h1><br>
                  <h2>Email: fujiwara.chika@lovedetective.yo</h2>
                </div>
                <div class="row">
                  <p>Certificate ID: 100001</p>
                  <p>Type: Inspector</p>
                </div>
              </div>
           </div>
           <div class="row">
              <h1>Registered Buildings</h1><br>
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
           <div class="row">
              <h1>text</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dolor vulputate quam convallis consequat. Quisque eu lorem eget magna lacinia suscipit. Maecenas condimentum vehicula eros. Fusce massa lacus, blandit et leo sed, accumsan commodo sem. Sed eget pulvinar tellus. Praesent ex diam, sodales at consequat id, viverra ut dolor. In eget orci sit amet magna sagittis mattis sit amet sed augue. Vivamus facilisis libero ligula, vel sodales ipsum sollicitudin id. Duis vitae urna rutrum, dignissim arcu ac, elementum augue. Quisque id interdum ligula. Donec tincidunt feugiat massa sed aliquam. Duis eu vehicula turpis.</p>
           </div>
         </div>
       </div>
    @endsection
    <b></b>