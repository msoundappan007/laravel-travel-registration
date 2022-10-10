
@extends('layouts.frontend')
@section('content')

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('cssfile/app.css')}}">
   
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;1,100&display=swap" rel="stylesheet">
    <title> Login</title>
</head>
<body>
    <form class="box" action="{{ url('login-data')}}" method="post">
                          @if(Session::has('success'))
                           <div class="alert alert-success">{{Session::get('success')}} </div>
                           @endif

                            @if(Session::has('fail'))
                           <div class="alert alert-danger">{{Session::get('fail')}} </div>   
                            @endif
    {{csrf_field()}}
    <h1 >login</h1>
      
      <input type="text" name="email" value="{{old('email')}}"placeholder="username">
      <span class="text-danger" style="color:red"> @error('email'){{$message}} @enderror</span>
      <input type="password" name="" placeholder="password">
      <span class="text-danger"style="color:red"> @error('password'){{$message}} @enderror</span>
      <input type="submit" name="" value="login">
      <div class="pass">forget password</div>
      <br>
      <a href="register">New register register here</a>
    </form>
   
</body>
</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container">
<table >
              <form action="{{ url ('login-data')}}"method="post">
              
                           @if(Session::has('success'))
                           <div class="alert alert-success">{{Session::get('success')}} </div>
                           @endif

                            @if(Session::has('fail'))
                           <div class="alert alert-danger">{{Session::get('fail')}} </div>   
                            @endif
                           
              {{csrf_field()}}
                            
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
                           
                            <button type="login" class="btn btn-primary">login</button>
                            <br>
                            <br>    
                         <a href="admin">New register   !! Register here</a>
               </form>

</table>
</div>
</body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>
@endsection