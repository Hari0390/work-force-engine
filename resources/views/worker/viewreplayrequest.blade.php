@extends('layouts.app')

@section('content')


<div class="card">
  <div class="card-header">
    <h3 class="card-title">Workers Review</h3>
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
          <th scope="col">Status</th>
          <th scope="col">Review</th>
        </tr>
      </thead>
      <tbody>
          @php($i=1)
        @foreach($workers as $worker)
        <tr>
          <td>{{$i++}}</td>
          <td>{{$worker->company_name}}</td>
          <td>{{$worker->job_role}}</td>
          <td>{{$worker->worker_name}}</td>
          <td>{{$worker->worker_email}}</td>

          @if(($worker->request_status) == NULL)
            <td>Verification</td>
          @else
          <td>{{$worker->request_status}}</td>
          @endif

          @if(($worker->request_review) == NULL)
            <td>Verification</td>
          @else
          <td>{{$worker->request_review}}</td>
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