@extends('layouts.guest')
@section('main')

<section id="register" class="bg-dark text-light" style="min-height:600px;">
        <div class="container">
          <h1 class="text-center mb-md-5 mb-2">Register</h1>
          <form action="{{route('register')}}" method="post" class="pb-5">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Username</label>
              <input type="text" name="name" class="form-control" id="name" >
              @error("name")
              <div class="alert alert-primary" role="alert">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="email">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              @error("email")
              <div class="alert alert-primary" role="alert">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input id="password" name="password" type="password" class="form-control">
              @error("password")
              <div class="alert alert-primary" role="alert">
                {{$message}}
              </div>
              @enderror
              
            </div>
            <div class="mb-3">
              <label for="confirm" class="form-label">Confirm Password</label>
              <input type="password" name="password_confirmation" class="form-control" id="confirm">
              @error("password_confirmation")
              <div class="alert alert-primary" role="alert">
                {{$message}}
              </div>
              @enderror
            </div>
            
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
          </form>
        </div>
      </section>

    @endsection