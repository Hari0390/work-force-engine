@extends('layouts.app')

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Worker Details</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Worker Name</th>
          <th scope="col"> Email</th>
          <th scope="col">Address </th>
          <th scope="col">Contact No</th>
          <th scope="col">Details</th>
          
        </tr>
      </thead>
      <tbody>
          @php($i=1)
        @foreach($users as $user)
        <tr>
          <td>{{$i++}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->address}}</td>
          <td>{{$user->contact_no}}</td>
          <td>{{$user->details}}</td>
          
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->



@endsection