@extends('front.master')


@section('body')

  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
   <h1 class="mt-4 mb-3"></h1>

 

    <div class="row">
      <div class="col-lg-8">
                  <div class="card">
                    <div class="card-body">
                       <div class="form-group  well">
                    <h4 class="text-center text-primary">Register Here</h4>
                    <hr>
                    <form action="{{route('new-sign-up')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email_address" class="form-control" placeholder="Email" onblur="emailCheck(this.value);">
                            <span id="red" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="number" name="phone_number" class="form-control" placeholder="Phone no.">
                        </div>
                        <div class="form-group">
                            <textarea type="text" name="address" class="form-control" placeholder="Address"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn" class="btn btn-primary btn-block" id="regBtn" value="Register Now">
                        </div>
                    </form>
                </div>
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

  <script>
    function emailCheck(email){
    

      // var xmlHttp = new XMLHttpRequest();
      // var serverPage = 'http://localhost/projectBlog/public/email-check/'+email;
      // xmlHttp.open('GET',serverPage);
      // xmlHttp.onreadystatechange = function(){
      //   if (xmlHttp.readyState == 4 && xmlHttp.status==200) {
      //     document.getElementById('red').innerHTML = xmlHttp.responseText;
      //     if (xmlHttp.responseText=='Email adress exist.Try again!') {
      //       document.getElementById('regBtn').disabled = true;
      //     } else {
      //       document.getElementById('regBtn').disabled = false;
      //     }
      //   }
      // }

      // xmlHttp.send();

      $.ajax({
        url     : 'http://localhost/projectBlog/public/email-check/'+email,
        method  : 'GET',
        data    : {email:email},
        dataType:'JSON',
        success : function(data){
          document.getElementById('red').innerHTML = data;
          if (data =='Email adress exist.Try again!') {
            document.getElementById('regBtn').disabled = true;
          } else {
            document.getElementById('regBtn').disabled = false;
          }
        }
        
      });


    }

  </script>



@endsection