<?php
$user = auth()->user();
$email=$user->email;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href='{{asset("css/cart.css")}}' rel='stylesheet'>
</head>
<body>

<h2 class="my-5 text-center">Order Confirmation</h2>
  <main class="mt-5 pt-4">
        <div class="container">
          <form action='placedOrder' method='POST'>
            @csrf
            <!--email-->
            <div class="md-form mb-5">
                <label for="email" class="">Email</label>
                <input type="text" name="email" class="form-control" value="{{$email}}" readonly>
            </div>
            <!--phone number-->
            <div class="md-form mb-5">
                <label for="phone" class="">Phone Number</label>
                <input type="text" name="phone" class="form-control" placeholder="12345678" required>
                <small class="text-muted"></small>
              </div>
            <!--address-->
            <div class="md-form mb-5">
                <label for="address" class="">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Country City Region" required>
                <small class="text-muted"></small>
              </div>
              

            <br></br>
            <div class="card mb-4 mb-lg-0">
                <div class="card-body">
                <h5 class="mb-0">Summary</h5>
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Products
                <span>{{$total}} OMR</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Shipping
                <span>2.00 OMR</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                </div>
                <span><strong>{{$total+2.00}} OMR</strong></span>
              </li>
            </ul>

            <hr>
              <div class="d-block my-3">
              <h5 class="mb-0">Payment Method</h5>
                <div class="custom-control custom-radio">
                  <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                  <label class="custom-control-label" for="credit">Credit card</label>
                </div>
                <div class="custom-control custom-radio">
                  <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                  <label class="custom-control-label" for="debit">Debit card</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="cc-name">Name on card</label>
                  <input type="text" class="form-control" name="cc-name" placeholder="" required>
                  <small class="text-muted">Full name as displayed on card</small>
                  <div class="invalid-feedback">
                    Name on card is required
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cc-number">Credit card number</label>
                  <input type="text" class="form-control" name="cc-number" placeholder="" required>
                  <div class="invalid-feedback">
                    Credit card number is required
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 mb-3">
                  <label for="cc-expiration">Expiration</label>
                  <input type="text" class="form-control" name="cc-expiration" placeholder="" required>
                  <div class="invalid-feedback">
                    Expiration date required
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="cc-expiration">CVV</label>
                  <input type="text" class="form-control" name="cc-cvv" placeholder="" required>
                  <div class="invalid-feedback">
                    Security code required
                  </div>
                </div>
              </div>
            </form>

          </div>
          
            <button class="btn btn-primary btn-lg btn-block"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
              Place Order
            </button>
            
                </div>
            
            </div>
        </div>
</form>
        <br></br>
        </main>
        <!--Main layout-->
  
</body>
</html>