@extends('layouts.app')

@section('content')



  @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
  @endif
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Request View</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">companyname</th>
            <th scope="col">job role</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Contact No</th>
            <th scope="col">Qualification</th>
            <th scope="col">Experience</th>
            <th scope="col">CV</th>
           
          </tr>
        </thead>
        <tbody>
            @php($i=1)
          @foreach($workers as $worker)
          @if($worker->request_status != 'Rejected')
          <tr>
            <td>{{$i++}}</td>
            <td>{{$worker->company_name}}</td>
            <td>{{$worker->job_role}}</td>
            <td>{{$worker->worker_name}}</td>
            <td>{{$worker->worker_email}}</td>
            <td>{{$worker->worker_address}}</td>
            <td>{{$worker->worker_contact_no}}</td>
            <td>{{$worker->worker_qualification}}</td>
            <td>{{$worker->worker_experience}}</td>
            <td>{{$worker->worker_cv}}</td>
            @if(($users->roll ) == 2)
              @if($worker->replay == NULL)
                  <td><a class="btn btn-primary" href="{{route('replayview',$worker->w_id)}}" role="button">Replay</a></td>
                  <!--<td><a class="btn btn-danger" href="{{route('replayview',$worker->w_id)}}" role="button">Reject</a></td>-->
              @else
              {
                <td><a class="btn btn-primary" href="{{route('replayview',$worker->w_id)}}" role="button">Replayed</a></td>
              } 
              @endif
            @endif
          </tr>
          @endif
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
    

@endsection