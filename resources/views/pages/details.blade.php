@extends('layout.mainlayout')

    @section('content')
      <div class="text-muted">
        <div class="row">

          <div class="container bg-light">
           <div class="row">
              <h1>Asbestos Register</h1><br>
           </div>
           <div class="row">
              <div class="overflow-auto" id="asbestos_register">
                <table class="table">
                  <thread>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Where</th>
                      <th scope="col">Product</th>
                      <th scope="col">How much?</th>
                      <th scope="col">Surface Coating</th>
                      <th scope="col">Condition</th>
                      <th scope="col">Accessibility</th>
                      <th scope="col">Asbestos Type</th>
                      <th scope="col">Comment</th>
                      <th scope="col">Material Score</th>
                      <th scope="col">Priority Score</th>
                      <th scope="col">Action</th>
                      <th scope="col">By When</th>
                      <th scope="col">By Whom?</th>
                      <th scope="col"></th>
                    </tr>
                  </thread>
                  <tbody>
                    <tr>
                      <th scope="row">123456</th>
                      <td>Roof</td>
                      <td>Asbestos Cement</td>
                      <td>2 square metres</td>
                      <td>Felt</td>
                      <td>Dammaged</td>
                      <td>Difficult</td>
                      <td>Croxidolite</td>
                      <td></td>
                      <td>10</td>
                      <td>10</td>
                      <td>Remove please</td>
                      <td>1/1/2022</td>
                      <td>Me</td>
                      <button type="submit" class="btn btn-primary">Edit</button>
                    </tr>
                  <?php  ?>
                </table>
                <button type="submit" class="btn btn-primary">Add new record</button>
              </div>
           </div>
         </div>


        <div class="container bg-light">
          <div class="row">
            <h1>Asbestos Management Plan</h1><br> 
          </div>
          <div class="row">
            <form>
              <div class="form-group">
                <label for="planID">Plan ID:</label>
                <input id="certExp" class="form-control" type="text" placeholder="12345678" readonly>
              </div>
              <div class="form-group">
                <label for="address">Premises Address:</label>
                <textarea id="address" class="form-control rounded-0" rows="3" placeholder="51 A" readonly></textarea>
              </div>
              <div class="form-group">
                <label for="monDate">Monitoring Date:</label>
                <input id="monDate" class="form-control" type="date" placeholder="15/02/2020">
              </div>
              <div class="form-group">
                <label for="commPlan">Communication Plan:</label>
                <textarea id="commPlan" class="form-control rounded-0" rows="10" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas dolor vulputate quam convallis consequat. Quisque eu lorem eget magna lacinia suscipit. Maecenas condimentum vehicula eros. Fusce massa lacus, blandit et leo sed, accumsan commodo sem. Sed eget pulvinar tellus. Praesent ex diam, sodales at consequat id, viverra ut dolor. In eget orci sit amet magna sagittis mattis sit amet sed augue. Vivamus facilisis libero ligula, vel sodales ipsum sollicitudin id. Duis vitae urna rutrum, dignissim arcu ac, elementum augue. Quisque id interdum ligula. Donec tincidunt feugiat massa sed aliquam. Duis eu vehicula turpis.">
                </textarea>
              </div>
              <div class="form-group">
                <label for="createOn">Responsible Person:</label>
                <input id="createOn" class="form-control" type="text" placeholder="Kaguya Shinomiya" readonly>
              </div>
              <div class="form-group">
                <label for="createOn">Date Created:</label>
                <input id="createOn" class="form-control" type="date" placeholder="15/02/1999" readonly>
              </div>
              <button type="reset" value="Reset" class="btn btn-primary">New</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </form> 
          </div>
        </div>
      </div>
    @endsection
    <b></b>