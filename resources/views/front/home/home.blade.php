@extends('front.master')

@section('body')


<style type="text/css">
  .grow img{
transition: 1s ease;
}

.grow img:hover{
-webkit-transform: scale(1.2);
-ms-transform: scale(1.2);
transform: scale(1.2);
transition: 1s ease;
}

/*text glow css*/
.glow {
  font-size: 50px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
</style>
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('2.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="text-success text-strong">Football</h3>
            <p class="text-success text-strong">Football is a global game.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('1.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="text-success text-strong">PC Gaming</h3>
            <p class="text-success text-strong">Take Part in the competitions and earn money.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('4.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="text-success">Learn Laravel</h3>
            <p class="text-success">Make your life easier.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h3 class="my-4 text-strong text-success glow">Welcome to Our Blog</h3>

    <!-- Marketing Icons Section -->
    <div class="row grow">
    	@foreach($blogs as $blog)
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <a href="{{route('blog-details',['id'=>$blog->id])}}"><img src="{{asset($blog-> blog_image)}}" alt="{{$blog->blog_title}}" class="card-img-top" height="250"></a>
          <div class="card-body">
          	<h4 class="card-title">{{$blog->blog_title}}</h4>
            <p class="card-text">{{$blog->blog_short_description}}</p>
          </div>
          <div class="card-footer">
            <a href="{{route('blog-details',['id'=>$blog->id])}}" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <!-- /.row -->

<hr>
    <h2 class="text-success text-center">Populer Blogs</h2>

    <div class="row grow">
      @foreach($populerBlogs as $populerBlog)
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <a href="{{route('blog-details',['id'=>$populerBlog->id])}}"><img src="{{asset($populerBlog->blog_image)}}" alt="{{$populerBlog->blog_title}}" class="card-img-top" height="250"></a>
          <div class="card-body">
            <h4 class="card-title">{{$populerBlog->blog_title}}</h4>
            <p class="card-text">{{$populerBlog->blog_short_description}}</p>
          </div>
          <div class="card-footer">
            <a href="{{route('blog-details',['id'=>$populerBlog->id])}}" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
<hr>
    <!-- Portfolio Section -->
    <h2 class="text-success text-center">Our Newest Blogs</h2>

    <div class="row grow">
    	@foreach($latestBlogs as $latestBlog)
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <a href="{{route('blog-details',['id'=>$latestBlog->id])}}"><img src="{{asset($latestBlog-> blog_image)}}" alt="{{$latestBlog->blog_title}}" class="card-img-top" height="250"></a>
          <div class="card-body">
          	<h4 class="card-title">{{$latestBlog->blog_title}}</h4>
            <p class="card-text">{{$latestBlog->blog_short_description}}</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
    <!-- /.row -->

    <!-- Features Section -->

    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
      </div>
    </div>

  </div>

@endsection