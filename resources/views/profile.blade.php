@extends('layouts.app')

@section('content')



<div class="container">

    @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>
    @endif

    <div class="row">
        <form action="{{route('profile-store')}}" method="post" enctype="multipart/form-data">
            @csrf
            
            <div>
                <div class="d-flex justify-content-center">
                    @if(($users->image)==NULL)
                        <img src="{{asset('uploads/default_img.jpg')}}"                     
                        class="rounded-circle" alt="example placeholder" style="width: 200px;" />
                    @else
                        <img src="{{asset('uploads/'.$users->image)}}"
                        class="rounded-circle" alt="example placeholder" style="width: 200px;" />
                    @endif
                </div>
            
                <div class="d-flex justify-content-center">
                    <div class="btn btn-primary btn-rounded">
                        <label class="form-label text-white m-1" for="customFile2">Choose file</label>
                        <input type="file" class="form-control" id="customFile2" name="image" >
                    </div>
                </div>
            </div><br>    
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                @endforeach
            @endif       
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""  value="{{$users->name}}" name="name">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="formGroupExampleInput" placeholder=""  value="{{$users->email}}" name="email">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Contact no.</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="contactno" value="{{$users->contact_no}}" >
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Address</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="" name="address" value="{{$users->address}}" >
            </div>
            <label for="formGroupExampleInput2" class="form-label">Status</label>
            <select class="form-select" aria-label="Default select example" name="status" value="{{$users->roll}}">
                <option value="3">worker</option>
                <option value="2">work provider</option>
              </select>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Details</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="details" value="{{$users->details}}" >
            </div>
            
            <br>
            <input class="btn btn-primary" type="submit" value="Edit">
        </form>
    </div>
</div>


@endsection
