<!-- edit.blade.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit A Form</h2><br  />
          <form action="/{{$incident->id}}/update" method="post">
        @csrf
        <input name="_method" type="hidden" value="post">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Incident Description">Incident Description</label>
            <input type="text" class="form-control" name="Incident_Description" 
                   value="{{$incident->Incident_Description}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Root cause">Root cause</label>
              <input type="text" class="form-control" name="Root_cause" value="{{$incident->Root_cause}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Action taken">Action taken</label>
              <input type="text" class="form-control" name="Action_taken" value="{{$incident->Action_taken}}">
            </div>
          </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>