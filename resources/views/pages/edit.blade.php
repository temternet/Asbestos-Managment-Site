@extends('layout.mainlayout')

    @section('content')
      <div class="text-muted">
        <div class="row">
          <div class="container bg-light">
            <div class="row">
              <h1>Asbestos Management Plan</h1><br> 
            </div>
            <div class="row">
              <form>
                <div class="form-group">
                  <label for="asbestosID">Asbestos Record ID:</label>
                  <input id="asbestosID" class="form-control" type="text" placeholder="12345678" readonly>
                </div>
                <div class="form-group">
                  <label for="address">Where:</label>
                  <input id="prod" class="form-control" type="text" placeholder="">
                </div>
                <div class="form-group">
                  <label for="prod">Product:</label>
                  <input id="prod" class="form-control" type="text" placeholder="">
                </div>
                <div class="form-group">
                  <label for="area">How much?:</label>
                    <input id="area" class="form-control" type="number" placeholder="">
                </div>
                <div class="form-group">
                  <label for="sCoating">Surface Coating:</label>
                  <input id="sCoating" class="form-control" type="text" placeholder="Kaguya Shinomiya" readonly>
                </div>
                <div class="form-group">
                  <label for="cond">Condition:</label>
                  <select id="cond" class="form-control">
                    <option>1</option>
                    <option>1</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="access">Accessibility:</label>
                  <select id="access" class="form-control">
                    <option>1</option>
                    <option>1</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="aType">Asbestos Type:</label>
                  <select id="aType" class="form-control">
                    <option>1</option>
                    <option>1</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="comment">Comment:</label>
                  <input id="comment" class="form-control" type="text" placeholder="">
                </div>
                <div class="form-group">
                  <label for="mScore">Material Score:</label>
                  <input id="mScore" class="form-control" type="number" placeholder="">
                </div>
                <div class="form-group">
                  <label for="pScore">Priority Score:</label>
                  <input id="pScore" class="form-control" type="number" placeholder="">
                </div>
                <div class="form-group">
                  <label for="action">Action:</label>
                  <textarea id="action" class="form-control rounded-0" rows="3" placeholder="51 A"></textarea>
                </div>
                <div class="form-group">
                  <label for="when">By When:</label>
                  <input id="when" class="form-control" type="date" placeholder="15/02/1999" readonly>
                </div>
                <div class="form-group">
                  <label for="">By Whom?:</label>
                  <input id="" class="form-control" type="text" placeholder="">
                </div>
                <button type="reset" value="Reset" class="btn btn-primary">New</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </form> 
            </div>
          </div>
        </div>
    @endsection
    <b></b>