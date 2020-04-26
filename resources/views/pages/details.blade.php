@extends('layout.mainlayout')

    @section('content')
      <div class="text-muted">
        <div class="row">

          <div class="container bg-light col-xs-8">
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
                    @foreach($recs as $row)
                      <tr>
                        <th scope="row">{{ $num++ }}</th>
                        <td>{{ $row->location }}</td>
                        <td>{{ $row->product }}</td>
                        <td>{{ $row->area }}</td>
                        <td>{{ $row->surfaceCoating }}</td>
                        <td>{{ $row->asbestosCondition }}</td>
                        <td>{{ $row->accessibility }}</td>
                        <td>{{ $row->asbestosType }}</td>
                        <td>{{ $row->comments }}</td>
                        <td>{{ $row->materialScore }}</td>
                        <td>{{ $row->priorityScore }}</td>
                        <td>{{ $row->action }}</td>
                        <td>{{ $row->actionDate }}</td>
                        <td>{{ $row->deligate }}</td>
                        <td><button type="submit" class="btn btn-primary">Edit</button></td>
                      </tr>
                    @endforeach
                  <?php  ?>
                </table>
                <button type="submit" class="btn btn-primary">Add new record</button>
              </div>
           </div>
         </div>


        <div class="container bg-light col-xs-8">
          <div class="row">
            <h1>Asbestos Management Plan</h1><br> 
          </div>
          <div class="row">
            <form>
              <div class="form-group">
                <label for="planid">Plan ID:</label>
                <input id="planid" class="form-control" type="text" value="{{ $data->planID }}" readonly>
              </div>
              <div class="form-group">
                <label for="address">Premises Address:</label>
                <textarea id="address" class="form-control rounded-0" rows="3" readonly>
                  {{ $data->premisesAdr . ', ' . $data->addressL1 . ', ' . $data->addressL2 . ', ' . 
                  $data->town . ', ' . $data->county . ',' . $data->postCode }}
                </textarea>
              </div>
              <div class="form-group">
                <label for="monDate">Monitoring Date:</label>
                <input id="monDate" class="form-control" type="date" value="{{ $data->monitorDate }}">
              </div>
              <div class="form-group">
                <label for="commplan">Communication Plan:</label>
                <textarea id="commplan" class="form-control rounded-0" rows="10">
                  {{ $data->commPlan }}
                </textarea>
              </div>
              <div class="form-group">
                <label for="createOn">Responsible Person:</label>
                <input id="createOn" class="form-control" type="text" value="{{ $data->foreName . ' ' . $data->surName }}" readonly>
              </div>
              <div class="form-group">
                <label for="createOn">Date Created:</label>
                <input id="createOn" class="form-control" type="date" value="{{ $data->creationDate }}" readonly>
              </div>
              <button type="reset" value="Reset" class="btn btn-primary">New</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </form> 
          </div>
        </div>
      </div>
    @endsection
    <b></b>