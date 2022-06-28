<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/counter.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link  rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">


    <title>Hello, world!</title>
    <link rel="stylesheet" href="{{asset('css/counter.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <style>
      .card {
  width: 444px;
}
    </style>
  </head>
  <body>
   <div class="container-fluid" style="background-color: #000000;">
   	<div class="container">
   		<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#">Shoe Hub</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/index">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{url('/index/men')}}">men</a>
            <a class="dropdown-item" href="{{url('/index/women')}}">women</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/addShoes" tabindex="-1" aria-disabled="true">Add Shoes</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav mr-auto">
    	<li class="nav-item">
    		<a class="btn btn-lg btn-danger text-light ml-5"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Add To Cart</a>
    	</li>
    </ul>
  </div>
</nav>
   	</div>
   </div>




@foreach($data as $key => $data)
<div class="d-flex justify-content-center container mt-5">
        <div class="card p-3 bg-white"><i ></i>
            <div class="about-product text-center mt-2"><img src="{{ asset($data->img) }}" width="300">
                <div>
                    <a href="products/{{$data->id}}"><h4>{{$data->name}}</h4></a>
                    <h6 class="mt-0 text-black-50">{{$data->description}}</h6>
                </div>
            </div>
            <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Price</span><span>{{$data->price}} OMR</span></div>
        </div>
    </div>
    @endforeach



























    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/counter.js"></script>
    <script src="js/owl.carousel.min.js"></script>
   <script>

	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:false,
            loop:false
        }
    }
})
   </script>
  </body>
</html>
