<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


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


    <title>Products List</title>
    </head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

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
         <a class="nav-link" href="/products/create" tabindex="-1" aria-disabled="true">Add Products</a>
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
    <div class="container pt-3">
        <h1>{{ __('Products List') }}</h1>
    </div>

    <div class="container pt-3">
        <div class="row">
            @forelse ($products as $product)
            <div class="col-md-5">
                <div class="card">
                    <div class="card header">{{ $product->name }}</div>

                    <div class="card-body">
                        <img src="{{ asset($product->image_path) }}" style="max-width: 100%" >
                    </div>

                    <div class="card-footer">{{ __('Price:') }} {{ $product->price }}

                        <ul class="pt-3">
                            {{-- <li> {{ $product->price }}</li> --}}
                            <li>
                                <a href="/products/edit/ {{ $product->id }}">
                                <button class="btn btn-info" > {{ __('Edit') }}</button>
                                </a>

                            </li>
                                <a href="/products/delete/ {{ $product->id }}">
                                <button class="btn btn-danger"> {{ __('Delete') }}</button>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            @empty
            {{ __('No Data Found') }}
            @endforelse
        </div>
    </div>
</body>
</html>
