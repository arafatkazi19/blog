@extends('front.master')


@section('body')

  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
   <h1 class="mt-4 mb-3"></h1>

 

    <div class="row">
      <div class="col-lg-8">
                  <div class="card">
                    <div class="card-body">
                      <h3 class="text-danger ">{{Session::get('message')}}</h3>
                       <div class="form-group  well">
                    <h4 class="text-center text-primary">Login</h4>
                    <hr>
                    <form action="{{route('visitor-sign-in')}}" method="POST">
                        @csrf
           
                        <div class="form-group">
                            <input type="email" name="email_address" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn" class="btn btn-primary btn-block" value="Login">
                        </div>
                    </form>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                Don't have an account? <a href="{{route('sign-up')}}"><strong>Register Now</strong></a>
              </div>
            </div>


      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card mb-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>



@endsection