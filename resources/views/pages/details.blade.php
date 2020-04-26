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
          @foreach($data as $row)
            <form>
              <div class="form-group">
                <label for="planid">Plan ID:</label>
                <input id="planid" class="form-control" type="text" value="{{ $collection[9]->planID }}" readonly>
              </div>
              <div class="form-group">
                <label for="address">Premises Address:</label>
                <textarea id="address" class="form-control rounded-0" rows="3" value="{{ $collection[1]->premisesAdr . ', ' . 
                  $collection[2]->addressL1 . ', ' . $collection[3]->addressL2 . ', ' . $collection[4]->town . ', ' . $collection[5]->county . ', ' . 
                  $collection[6]->postCode }}" readonly></textarea>
              </div>
              <div class="form-group">
                <label for="monDate">Monitoring Date:</label>
                <input id="monDate" class="form-control" type="date" value="{{ $collection[10]->monitorDate }}">
              </div>
              <div class="form-group">
                <label for="commplan">Communication Plan:</label>
                <textarea id="commplan" class="form-control rounded-0" rows="10" value="{{ $collection[11]->commPlan }}">
                </textarea>
              </div>
              <div class="form-group">
                <label for="createOn">Responsible Person:</label>
                <input id="createOn" class="form-control" type="text" value="{{ $collection[12]->userID }}" readonly>
              </div>
              <div class="form-group">
                <label for="createOn">Date Created:</label>
                <input id="createOn" class="form-control" type="date" value="{{ $collection[13]->creationDate }}" readonly>
              </div>
              <button type="reset" value="Reset" class="btn btn-primary">New</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </form> 
          </div>
          @endforeach
        </div>
      </div>
    @endsection
    <b></b>