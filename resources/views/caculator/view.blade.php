@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
            
        <div class="row">
            <div class="col">
                <input type="number" class="form-control" placeholder="First number" id="first_number" name="number1">
            </div>+
            <div class="col">
                <input type="number" class="form-control" placeholder="Second number" id="fecond_number" name="number2">
            </div>     
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
        <button class="btn btn-primary" onclick="operation()">Submit</button>
        </div>
        <div class="row">
            <div class="col">
                <input type="number" class="form-control" placeholder="Result" id="result"  >
            </div>   
        </div>
            
    </div>
</div>

<script>
    function operation()
    {
        let x = parseInt(document.getElementById("first_number").value);
        var y = parseInt(document.getElementById("fecond_number").value);
        var s = x + y;
        //console.log(s);
        document.getElementById("result").value = s;
    }
</script>

@endsection