@extends('layouts.app')
@section('content')

<div class="col-md-12">
    <div class="card">
      <div class="card-header ">
        <h3 class="card-title">Detail </h3>
        
      </div>
      
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
                <th style="width: 10px">ID</th>
              <th>name</th>
              <th style="width: 40px">umur</th>
              <th >Bio</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>{{$castid->id}}</td>
                <td>{{$castid->name}}</td>
                <td>{{$castid->umur}}</td>
                <td>{{$castid->bio}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

</div>
</div>
  
@endsection