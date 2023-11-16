<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{session('message')}}
        </div>  
    @endif
    {{-- <form action="{{url('http://primetransports.in/paint_shop/paint_shop/public/api/vendor_store')}}" method="POST">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <label>Vendor Name</label>
                    <input type="text" class="form-control"  placeholder="" name="name" required>
                </div>
                <div class="col-3">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="" name="address" required>
                </div>

                <div class="col-3">
                    <label>Contact No</label>
                    <input type="tel" class="form-control" placeholder="" name="contact" required>
                </div>

                <div class="col-3">
                    <label>GST IN</label>
                    <input type="text" class="form-control" placeholder="" name="gstin" required>
                </div>
            </div>
        </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form> --}}
</body>
</html>