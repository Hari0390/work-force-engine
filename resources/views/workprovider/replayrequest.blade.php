@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <form action="{{route('replaystore',$workers->w_id)}}" method="post">
            @csrf
            
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="name" value="{{$workers->worker_name}}">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="formGroupExampleInput" placeholder=""   name="email" value="{{$workers->worker_email}}">
            </div>
            <label for="floatingTextarea2">Status</label>
            <select class="form-select" aria-label="Default select example" name="status">
                <option selected>select status</option>
                <option value="Accepted">Accepted</option>
                <option value="Rejected">Rejected</option>
              </select>
            <label for="floatingTextarea2">Review</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="review"></textarea>
            </div>
            
            <br>
            <input class="btn btn-primary" type="submit" value="submit">
        </form>
    </div>
</div>

@endsection