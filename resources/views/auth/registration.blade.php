<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
</head>
<body>
  @extends('main')
<div class="container"> 
  <div class="row">
    <div class="col-md-4 col-md-offset-4" style="margin-top:20px">
      <h4>Registration</h4>
      <hr>
      <form action="{{route('register-user')}}" method="post">
        @if(Session::has('success'))
        <div class="div alert alert-success">{{Session::get('success')}}</div>    
        @endif
        @if(Session::has('fail'))
        <div class="div alert alert-danger">{{Session::get('fail')}}</div>    
        @endif
        @csrf 
        <div class="form-group">
          <label for="name">Fulle Name</label>
          <input type="text" class="form-control" placeholder="Enter FullName" name="name" value="{{old('name')}}">
        <span class="text-danger"> @error('name') {{$message}} @enderror  </span>
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="text" class="form-control" placeholder="Enter Email Address" name="email" value="{{old('email')}}">
          <span class="text-danger"> @error('email') {{$message}} @enderror  </span>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{old('password')}}">
          <span class="text-danger"> @error('password') {{$message}} @enderror  </span>
        </div>
        <hr>
        <div class="form-group">
          <button class="btn btn-block btn-primary" type="submit">Register</button>
          <hr>
          <a href="login">Already Registered ? Log In Here</a>
      </form>
    </div>
  </div>
</div>

</body>
</html>