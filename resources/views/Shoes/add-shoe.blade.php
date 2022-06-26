
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="div">
            <div class="row pt-5">
                <h2>Add a new Shoe Item</h2>
            </div>
        </div>


<div class="container">
      <form>
        {{csrf_field()}}

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text " class="form-control" id="name" aria-describedby="emailHelp" name="name">
        </div>
        Size

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
        </div>



    {{-- <div class="row">
        <div class="col">
            <div class="mb-3">
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Qty
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">1</a></li>
                    <li><a class="dropdown-item" href="#">2</a></li>
                    <li><a class="dropdown-item" href="#">3</a></li>
                  </ul>
                </div>
              </div>
        </div>
    </div> --}}

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <input type="text" class="form-control" id="description" aria-describedby="emailHelp" name="description">
        </div>

        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <input type="number" class="form-control" id="category" aria-describedby="emailHelp" name="category">
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="float" class="form-control" id="pr|ice" aria-describedby="emailHelp" name="price">
        </div>

      <div class="mb-3">
          <label for="img" class="form-label">Image: </label>
          <input class="form-control" type="file" id="formFile">
      </div>

      <button type="submit" class="btn btn-primary">Add</button>

  </form>
 </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
