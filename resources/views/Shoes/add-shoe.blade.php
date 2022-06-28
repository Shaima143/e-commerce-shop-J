
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

    <div class="col-md-12">

        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="/index">Shoe Hub</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/index">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/addShoes">Add Shoes</a></a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/index/men')}}">men</a>
                        <a class="dropdown-item" href="{{url('/index/women')}}">women</a>
                    </ul>
                  </li>


                </ul>
                <div class="col-md-6">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>
                </div>
              </div>
            </div>
          </nav>
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

      <div class="container">
        <div class="div">
            <div class="row pt-5">
                <h2>Add a new Shoe Item</h2>
            </div>
        </div>

<div class="container">
      <form action="/newShoes" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text " class="form-control" id="name" aria-describedby="emailHelp" name="name">
        </div>
        {{-- Size

        <div class="row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" id="size">
                    <label class="form-check-label" for="flexRadioDefault1">
                      36
                    </label>
                  </div>
            </div>

            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" id="size">
                    <label class="form-check-label" for="flexRadioDefault1">
                      37
                    </label>
                  </div>
            </div>

            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" id="size">
                    <label class="form-check-label" for="flexRadioDefault1">
                      38
                    </label>
                  </div>
            </div>

            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" id="size">
                    <label class="form-check-label" for="flexRadioDefault1">
                      39
                    </label>
                  </div>
            </div>

            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" id="size">
                    <label class="form-check-label" for="flexRadioDefault1">
                      40
                    </label>
                  </div>
            </div>

            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" id="size">
                    <label class="form-check-label" for="flexRadioDefault1">
                      41
                    </label>
                  </div>
            </div>

            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" id="size">
                    <label class="form-check-label" for="flexRadioDefault1">
                      42
                    </label>
                  </div>
            </div>

            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="size" id="size">
                    <label class="form-check-label" for="flexRadioDefault1">
                      43
                    </label>
                  </div>
            </div>
        </div> --}}

        <div class="mb-3">
            <label for="size" class="form-label">Size</label>
            <input type="text" class="form-control" id="size" aria-describedby="emailHelp" name="size">
          </div>


        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="text" class="form-control" id="description" aria-describedby="emailHelp" name="description">
        </div>


        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" aria-describedby="emailHelp" name="category">
          </div>

          {{-- <select name="category class="form-control>
            <option value="1">Men</option>
            <option value="2">Women</option>
            <option value="3">Kids</option>
            </select> --}}

        {{-- <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="category" data-bs-toggle="dropdown" aria-expanded="false">
             Select category
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#" name="category">Men</a></li>
              <li><a class="dropdown-item" href="#" name="category">Women</a></li>
              <li><a class="dropdown-item" href="#" name="category">Kids</a></li>
            </ul>
          </div> --}}

          {{-- <input type="number" class="form-control" id="category" aria-describedby="emailHelp" name="category"> --}}
        {{-- </div> --}}

        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="float" class="form-control" id="price" aria-describedby="emailHelp" name="price">
        </div>

      <div class="mb-3">
         <input type="file" name="gallery" id="gallery">
          {{-- <label for="img" class="form-label">Image: </label>
          <input class="form-control" type="file" id="img"> --}}
      </div>

      <button type="submit" class="btn btn-primary">Add</button>

      @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

  </form>
 </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
