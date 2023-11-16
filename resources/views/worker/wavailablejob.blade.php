@extends('layouts.app')

@section('content')



  @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
  @endif
  @if(session('delete'))
        <div class="alert alert-delete" role="alert">
            {{session('delete')}}
        </div>
  @endif

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Available Jobs</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">companyname</th>
              <th scope="col">email</th>
              <th scope="col">address</th>
              <th scope="col">Contact No</th>
              <th scope="col">job role</th>
              <th scope="col">Qualification</th>
              <th scope="col">Salary</th>
              <th scope="col">Experience</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
        
        <tbody>
            @php($i=1)
          @foreach($array as $value)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$value['name']}}</td>
            <td>{{$value['email']}}</td>
            <td>{{$value['address']}}</td>
            <td>{{$value['contactno']}}</td>
            <td>{{$value['job_role']}}</td>
            <td>{{$value['qualification']}}</td>
            <td>{{$value['salary']}}</td>
            <td>{{$value['experience']}}</td>
            
              @if($users->roll == 3)
                  @if($value['status'] == 0)
                    <td><a class="btn btn-danger" href="{{route('worker_display_requestform',$value['wp_id'])}}" role="button">Request</a></td>
                  @else
                    <td>Requested</td>
                  @endif
              @else
              
                <td><a class="btn btn-danger" href="{{route('delete_vaccancy',$value['wp_id'])}}" role="button">delete</a></td>
              
              @endif
            
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  




  
          

@endsection