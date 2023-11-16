@extends('layouts.app')

@section('content')




<div class="container">
    <div class="row">
        <div class="card card-primary p-3">
            <div class="card-header">
              <h3 class="card-title">Add Vaccancy</h3>
            </div>
            <form action="{{route('workprovider.store')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="companyname" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="formGroupExampleInput" placeholder=""   name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Address</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="address" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Contact no.</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="contactno" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Job role</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""   name="jobrole" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Qualification</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="qualification" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">salary</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="salary" required>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">experience</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="experience" required>
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