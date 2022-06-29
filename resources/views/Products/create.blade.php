<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <title>{{ __('Create Product') }}</title>
</head>
<body>

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
                    <label for="category_id" class="form-label">{{ __('Product Image') }}</label>
                    <input type="file" class="form-control" id="formFile" aria-describedby="emailHelp" name="image">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">{{ __('Category ID') }}</label>
                    <input type="number" class="form-control" id="category_id" aria-describedby="emailHelp" name="category_id">
                </div>

                <button type="submit" class="btn btn-primary">Add</button>

                @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
            </form>
        </div>
</body>
</html>
