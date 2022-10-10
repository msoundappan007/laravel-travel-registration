@extends('layouts.frontend')
@section('content')
<?php
use Session as s;
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<body>
    <div class="container">
<table>
              <form action="{{ url ('detail-data')}}"method="post">
              
                           @if(Session::has('success'))
                           <div class="alert alert-success">{{Session::get('success')}} </div>
                           @endif

                            @if(Session::has('fail'))
                           <div class="alert alert-danger">{{Session::get('fail')}} </div>   
                            @endif
                           
              {{csrf_field()}}
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter your name">
                                <span class="text-danger"> @error('name'){{$message}} @enderror</span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Id :&emsp;</label>
                                <input type="text" class="form-control" name="email" value="{{old('email')}}"placeholder="Enter your Email id">
                                <span class="text-danger"> @error('email'){{$message}} @enderror</span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter your password">
                                <span class="text-danger"> @error('password'){{$message}} @enderror</span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <input type="text" class="form-control" name="Address"value="{{old('Address')}}" placeholder="Enter your address">
                                <span class="text-danger"> @error('Address'){{$message}} @enderror</span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone Number &emsp;&emsp;&emsp;</label>
                                <input type="text" class="form-control" name="phonenumber"value="{{old('phonenumber')}}" placeholder="Enter your Phone number">
                                <span class="text-danger"> @error('phonenumber'){{$message}} @enderror</span>
</div>
</br>
                            <div class="mb-3">
                                <label class="form-label">Gender&emsp;&emsp;&emsp;&emsp;&emsp;</label>
                                <input type="radio" name="gender"  value="Male">Male&emsp;&emsp;</input><input type="radio" name="gender" value="Female" checked>female</input>
                            </div>
                            <button type="register" class="btn btn-primary">Register</button>
                            <br>
                            <br>    
                            <a href="admin">Already  registered !! login here</a>
               </form>

</table>
</div>
</body>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    
</html>
@endsection
