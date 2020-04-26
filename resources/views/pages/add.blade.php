@extends('layout.mainlayout')

    @section('content')
      <div class="text-muted">
        <div class="row">
          <div class="container bg-light">
            <div class="row">
              <h1>Add New Record</h1><br> 
            </div>
            <div class="row">
              <form>
                <div class="form-group">
                  <label for="where">Where:</label>
                  <input id="where" class="form-control" type="text" placeholder="Where is the asbestos located?">
                </div>
                <div class="form-group">
                  <label for="prod">Product:</label>
                  <input id="prod" class="form-control" type="text" placeholder="e.g. cement, tiling, etc.">
                </div>
                <div class="form-group">
                  <label for="area">How much?:</label>
                    <input id="area" class="form-control" type="number" placeholder="How large an area does it cover?">
                </div>
                <div class="form-group">
                  <label for="sCoating">Surface Coating:</label>
                  <input id="sCoating" class="form-control" type="text" placeholder="e.g Emulsion Paint, Metal Case, etc." readonly>
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
                  <textarea id="comment" class="form-control rounded-0" rows="3" placeholder="Comments?">
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
                  <textarea id="action" class="form-control rounded-0" rows="3" placeholder="Actions to be taken to deal with asbestos?"></textarea>
                </div>
                <div class="form-group">
                  <label for="when">By When:</label>
                  <input id="when" class="form-control" type="date">
                </div>
                <div class="form-group">
                  <label for="">By Whom?:</label>
                  <input id="" class="form-control" type="text" placeholder="Who will be performing the action?">
                </div>
                <button type="reset" value="Reset" class="btn btn-primary">New</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </form> 
            </div>
          </div>
        </div>
    @endsection
    <b></b>