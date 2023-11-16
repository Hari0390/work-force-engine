@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="card card-primary p-3">
            <div class="card-header">
              <h3 class="card-title">Worker List</h3>
            </div>
            <form >
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example" id="workername" name="worker" onchange="ShowCustomer(this.value)" >
                            <option selected value="" hidden>select worker</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                <div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact NO</th>
                            <th scope="col">Address</th>
                            <th scope="col">Details</th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td id="name"></td>
                            <td id="email"></td>
                            <td id="contactno"></td>
                            <td id="address"></td>
                            <td id="details"></td>
                          </tr>
                        </tbody>
                      </table>

                </div>
                </div>
            </form>
        </div>
    </div>
    {{-- <div id="txtHint">
        <script>
            document.write("Select Any");
        </script>
    </div> --}}

 



    <script>

        function ShowCustomer(str)
        {
            $.ajax({
                url: "{{url('/admin/workerdetails')}}", //this is your ur
                type: 'POST', //this is your method
                data: {'id' : str,'_token':'{{csrf_token()}}'},
                success: function(data){
                    $("#name").text(data['name']);
                    $("#email").text(data['email']);
                    $("#contactno").text(data['contact_no']);
                    $("#address").text(data['address']);
                    $("#details").text(data['details']);
                    // document.getElementById('email').value=data['email'];
                    // console.log(data);
                }
            });


        }

    </script>

@endsection
