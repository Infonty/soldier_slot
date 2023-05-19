@extends('layouts.guest')
@section('main')
<section id="login" class="bg-dark text-light">
        <div class="container">


          <div class="row">
            <h1 class="text-center mb-md-5 mb-2">Login</h1>
            <div class="col-md-6">
              <form action="{{route('login')}}" method="post" class="pb-5">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
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
                  <input type="password" name="password" class="form-control" id="password">
                  @error("password")
                    <div class="alert alert-primary" role="alert">
                        {{$message}}
                    </div>
                  @enderror
                </div>
                
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
              </form>
            </div>

            <div class="col-md-6 ps-5">
              <h2 class="text-primary ms-5">Lorem Ipsum</h2>
              <ol class="dc-ol">
                <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem, reprehenderit!</li>
                <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore, reprehenderit?</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, non exercitationem. Harum officia laborum aspernatur dolor. Sapiente officiis sed suscipit!</li>
              </ol>
            </div>
          </div>
          
        </div>
      </section>
      @endsection