<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br/>
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Incident_Description</th>
        <th>Root_cause</th>
        <th>date</th>
        <th>Action-taken</th>
        <th></th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($incidents as $incident)
      @php
        $date=date('Y-m-d', $incident['date']);
        @endphp
      <tr>
        <td>{{$incident['Incident_Description']}}</td>
        <td>{{$incident['Root_cause']}}</td>
        <td>{{$date}}</td>
        <td>{{$incident['Action_taken']}}</td>
        
        <td><a href="/{{$incident->id}}/edit" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="/{{$incident->id}}/destroy" method="get">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>