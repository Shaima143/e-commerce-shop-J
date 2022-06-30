<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

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

    <title>{{ __('Create Product') }}</title>
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
         <a class="nav-link" href="/products">List Products</a>
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
         <a class="nav-link" href="/products/create" tabindex="-1" aria-disabled="true">Add Product</a>
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



    <div class="col-md-12">
        <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>
                  {{$error}}
              </li>
              @endforeach
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

        <div class="container pt-3">
            <h1>{{ __('Create Products') }}</h1>

            <form action="/products/store" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Name') }}</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">{{ __('Price') }}</label>
                    <input type="number" class="form-control" id="price" aria-describedby="emailHelp" name="price">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">{{ __('Product Image') }}</label>
                    <input type="file" class="form-control" id="formFile" aria-describedby="emailHelp" name="image">
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">{{ __('Category ID') }}</label>
                    <input type="number" class="form-control" id="category_id" aria-describedby="emailHelp" name="category_id">
                </div>

                <button type="submit" class="btn btn-primary">Add</button>

                @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
            </form>
        </div>
</body>
</html>
