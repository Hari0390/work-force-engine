@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="card card-primary p-3">
            <div class="card-header">
              <h3 class="card-title">Add Vaccancy</h3>
            </div>
            <form action="{{route('worker_store_requestform',$user_id)}}"  method="post">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="name" value='{{$users->name}}'>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="formGroupExampleInput" placeholder=""   name="email" value='{{$users->email}}'>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Address</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="address" value='{{$users->address}}'> 
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Contact no.</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="contactno"  value='{{$users->contact_no}}'>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Qualification</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="qualification" >
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">experience</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="experience">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">CV</label>
                        <input class="form-control" type="file" id="formFile" name="cv">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection