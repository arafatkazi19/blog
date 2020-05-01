<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('/')}}front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('/')}}front/css/modern-business.css" rel="stylesheet">

  <!-- animation link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <div id="div1" class="fa">  </div>

      <a class="navbar-brand" href="{{route('/')}}">World is Small</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          @foreach($categories as $category)
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('category-blog',['id'=>$category->id,'name'=>$category->category_name])}}">{{$category->category_name}}</a>
          </li>
          @endforeach

          @if(Session::get('visitorId'))     
          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" data-toggle="dropdown" href="">{{Session::get('visitorName')}}</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"

                onclick="
                event.preventDefault();
                document.getElementById('visitorLogoutForm').submit();

                " 

                >Logout</a></li>
            </ul>
            <form id="visitorLogoutForm" action="{{route('visitor-logout')}}" method="POST">
              @csrf
            </form>
          </li>

          @else
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('visitor-login')}}">Login</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('sign-up')}}">Registration</a>
          </li>

          @endif



          
        </ul>
      </div>
    </div>
  </nav>

  @yield('body')
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; World is Small</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('/')}}front/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('/')}}front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script>
    function hourglass() {
      var a;
      a = document.getElementById("div1");
      a.innerHTML = "&#xf251;";
      setTimeout(function () {
        a.innerHTML = "&#xf252;";
      }, 1000);
      setTimeout(function () {
        a.innerHTML = "&#xf253;";
      }, 2000);
    }
    hourglass();
    setInterval(hourglass, 3000);
  </script>

</body>

</html>
