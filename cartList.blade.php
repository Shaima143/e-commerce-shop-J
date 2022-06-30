<?php
use App\Http\Controllers\cartController;
$total=cartController::cartCount();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href='{{asset("css/cart.css")}}' rel='stylesheet'>
</head>
<body>
<section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Cart - {{$total}} items</h5>
          </div>
          <div class="card-body">
            <!-- Single item -->
            @foreach($selections as $product)
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="{{$product->gallery}}"
                    class="w-100" alt="Blue Jeans Jacket" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <br></br>
                <!-- Image -->
              </div>
              
              <div class="col-lg-5 col-md-6 mb-4 mb-lg-1">
                
                <!-- Data -->
                <strong>{{$product->name}}</strong>
                <br></br>
                <!-- Price -->
                
                  <p>Price: {{$product->price}} OMR</>
                  <br></br>
                <!-- Price -->
                <a class="btn btn-primary btn-sm me-1 mb-2" href='/removeitem/{{$product->itemID}}'
                  ><i class="fa fa-trash"></i>Remove Item
                </a>
                <!-- Data -->
              </div>
            </div>
            @endforeach
            

              

              
              
            
        <div class="card mb-4 mb-lg-0">
          <div class="card-body">
            <p><strong>We accept</strong></p>
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
              alt="Visa" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
              alt="American Express" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
              alt="Mastercard" />
          </div>
        </div>
        <br></br>
        <a class="btn btn-primary btn-lg btn-block" href='checkout'><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
              Go to checkout
            </a>
      </div>
    </div>
  </div>
</section>
</body>
</html>

