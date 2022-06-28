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
  </head>
  <body>
   <div class="container-fluid" style="background-color: #000000;">
   	<div class="container">
   		<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('/index/men')}}">men</a>
          <a class="dropdown-item" href="{{url('/index/women')}}">women</a>
          
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
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
   
   
   
   
   
   
   <!--slider start -->
   
   <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/shop 1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
         <p class="slider-title">NEW  COLLCRTION ARRIVED</p>
         <p class="slider-text">heck the latest collection on Women's Dress</p>
         <p class="buttob mt-5"> <a class="btn btn-lg btn-success">BUY NOW</a>&nbsp; &nbsp; <a class="btn btn-danger btn-lg">KNOW MORE</a></p> 
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/shop 2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p class="slider-title">EMI Available In <i class="fa fa-credit-card-alt" aria-hidden="true"></i></p>
         <p class="slider-text">50% off in some popular brand product.</p>
         <p class="buttob mt-5"> <a class="btn btn-lg btn-success">BUY NOW</a>&nbsp; &nbsp; <a class="btn btn-danger btn-lg">KNOW MORE</a></p> 
        </div>
      </div>
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
   
   <!--slider end-->

<div class="container mt-5">
	
 	<div class="row">
		<div class="col-md-6">
			<div class="outer-div">
				<div class="inner-div1">
				<a href="{{url('/index/men')}}"><h1 class="zoom-box-text">FOR MAN </h1></a>
				</div>
			</div>
		</div>
		
		<div class="col-md-6">
			<div class="outer-div">
				<div class="inner-div2">
				<a href="{{url('/index/women')}}"><h1 class="zoom-box-text">FOR WOMEN </h1></a>
				</div>
			</div>
		</div>
	
	</div>
	

</div>
   
   
 <!--counter start-->
  <div class="container counter">
  	<div class="row justify-content-center mt-5 mb-2" style="padding-top: 150px">
  		<h1 class="text-capitalize"><strong>Mega sale Will be start Soon </strong></h1>
  	</div>
  	
  	<div class="row justify-content-center rounded-pill mt-5" style="padding-bottom: 100px; font-size: 70px" id="countdown">
  		
  	</div>
  	
  	
  	<div class="row mt-1 pb-5">
  		<div class="col-md-12 text-center"><a class="btn btn-danger text-light btn-lg">REGISTER NOW</a></div>
  	</div>
  </div>
 <!--counter end-->     
   
   
   
   <div class="container">
   	<div class="row mt-5 mb-5">
   		<div class="col-md-12">
   			<h1 class="text-center">FOR HER</h1>
   		</div>
   	</div>
   </div>
   
   
   <div class="container">
   	<div class="owl-carousel">
   		<div>
   			<div class="card product-card">
   				<img class="card-img-top img-fluid" src="img/product/c101.jpg">
   				<div class="card-body">
   					<div class="card-title"> Product1</div>
   					<div class="card-text">
   						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto hic nobis molestias rem eius assumenda.<br/>
   						<a class="btn btn-info">Buy Now</a> &nbsp; &nbsp; <a class="btn btn-success">Add To Cart</a>
   					</div>
   				</div>
   			</div>
   		</div>
   		
   		<div>
   			<div class="card product-card">
   				<img class="card-img-top img-fluid" src="img/product/c111.jpg">
   				<div class="card-body">
   					<div class="card-title"> Product2</div>
   					<div class="card-text">
   						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto hic nobis molestias rem eius assumenda.<br/>
   						<a class="btn btn-info">Buy Now</a> &nbsp; &nbsp; <a class="btn btn-success">Add To Cart</a>
   					</div>
   				</div>
   			</div>
   		</div>
   		
   		<div>
   			<div class="card product-card">
   				<img class="card-img-top img-fluid" src="img/product/c121.jpg">
   				<div class="card-body">
   					<div class="card-title"> Product3</div>
   					<div class="card-text">
   						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto hic nobis molestias rem eius assumenda.<br/>
   						<a class="btn btn-info">Buy Now</a> &nbsp; &nbsp; <a class="btn btn-success">Add To Cart</a>
   					</div>
   				</div>
   			</div>
   		</div>
   		
   		
   		<div>
   			<div class="card product-card">
   				<img class="card-img-top img-fluid" src="img/product/c131.jpg">
   				<div class="card-body">
   					<div class="card-title"> Product4</div>
   					<div class="card-text">
   						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto hic nobis molestias rem eius assumenda.<br/>
   						<a class="btn btn-info">Buy Now</a> &nbsp; &nbsp; <a class="btn btn-success">Add To Cart</a>
   					</div>
   				</div>
   			</div>
   		</div>
   		
   		
   		<div>
   			<div class="card product-card">
   				<img class="card-img-top img-fluid" src="img/product/c141.jpg">
   				<div class="card-body">
   					<div class="card-title"> Product5</div>
   					<div class="card-text">
   						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto hic nobis molestias rem eius assumenda.<br/>
   						<a class="btn btn-info">Buy Now</a> &nbsp; &nbsp; <a class="btn btn-success">Add To Cart</a>
   					</div>
   				</div>
   			</div>
   		</div>
   		
   		
   		<div>
   			<div class="card product-card">
   				<img class="card-img-top img-fluid" src="img/product/c151.jpg">
   				<div class="card-body">
   					<div class="card-title"> Product6</div>
   					<div class="card-text">
   						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto hic nobis molestias rem eius assumenda.<br/>
   						<a class="btn btn-info">Buy Now</a> &nbsp; &nbsp; <a class="btn btn-success">Add To Cart</a>
   					</div>
   				</div>
   			</div>
   		</div>
   		
   		<div>
   			<div class="card product-card">
   				<img class="card-img-top img-fluid" src="img/product/c161.jpg">
   				<div class="card-body">
   					<div class="card-title"> Product7</div>
   					<div class="card-text">
   						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto hic nobis molestias rem eius assumenda.<br/>
   						<a class="btn btn-info">Buy Now</a> &nbsp; &nbsp; <a class="btn btn-success">Add To Cart</a>
   					</div>
   				</div>
   			</div>
   		</div>
   		
   		<div>
   			<div class="card product-card">
   				<img class="card-img-top img-fluid" src="img/product/c31.jpg">
   				<div class="card-body">
   					<div class="card-title"> Product8</div>
   					<div class="card-text">
   						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto hic nobis molestias rem eius assumenda.<br/>
   						<a class="btn btn-info">Buy Now</a> &nbsp; &nbsp; <a class="btn btn-success">Add To Cart</a>
   					</div>
   				</div>
   			</div>
   		</div>
   	</div>
   </div>
   
   
   
   
   <div class="container">
   	<div class="row mt-5 mb-5">
   		<div class="col-md-12">
   			<h1 class="text-center">FOR HIM</h1>
   		</div>
   	</div>
   </div>
   
   
   <div class="container">
   	<div class="owl-carousel">
   		<div>
   			<div class="card product-card">
   				<img class="card-img-top img-fluid" src="img/product/M1.jpg">
   				<div class="card-body">
   					<div class="card-title"> Product1</div>
   					<div class="card-text">
   						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto hic nobis molestias rem eius assumenda.<br/>
   						<a class="btn btn-info">Buy Now</a> &nbsp; &nbsp; <a class="btn btn-success">Add To Cart</a>
   					</div>
   				</div>
   			</div>
   		</div>
   		
   		<div>
   			<div class="card product-card">
   				<img class="card-img-top img-fluid" src="img/product/M2.jpg">
   				<div class="card-body">
   					<div class="card-title"> Product2</div>
   					<div class="card-text">
   						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto hic nobis molestias rem eius assumenda.<br/>
   						<a class="btn btn-info">Buy Now</a> &nbsp; &nbsp; <a class="btn btn-success">Add To Cart</a>
   					</div>
   				</div>
   			</div>
   		</div>
   		
   		<div>
   			<div class="card product-card">
   				<img class="card-img-top img-fluid" src="img/product/M3.jpg">
   				<div class="card-body">
   					<div class="card-title"> Product3</div>
   					<div class="card-text">
   						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto hic nobis molestias rem eius assumenda.<br/>
   						<a class="btn btn-info">Buy Now</a> &nbsp; &nbsp; <a class="btn btn-success">Add To Cart</a>
   					</div>
   				</div>
   			</div>
   		</div>
   		
   		
   		<div>
   			<div class="card product-card">
   				<img class="card-img-top img-fluid" src="img/product/M4.jpg">
   				<div class="card-body">
   					<div class="card-title"> Product4</div>
   					<div class="card-text">
   						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto hic nobis molestias rem eius assumenda.<br/>
   						<a class="btn btn-info">Buy Now</a> &nbsp; &nbsp; <a class="btn btn-success">Add To Cart</a>
   					</div>
   				</div>
   			</div>
   		</div>
   		
   		
   		<div>
   			<div class="card product-card">
   				<img class="card-img-top img-fluid" src="img/product/M5.jpg">
   				<div class="card-body">
   					<div class="card-title"> Product5</div>
   					<div class="card-text">
   						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto hic nobis molestias rem eius assumenda.<br/>
   						<a class="btn btn-info">Buy Now</a> &nbsp; &nbsp; <a class="btn btn-success">Add To Cart</a>
   					</div>
   				</div>
   			</div>
   		</div>
   		
   		
   		<div>
   			<div class="card product-card">
   				<img class="card-img-top img-fluid" src="img/product/M6.jpg">
   				<div class="card-body">
   					<div class="card-title"> Product6</div>
   					<div class="card-text">
   						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto hic nobis molestias rem eius assumenda.<br/>
   						<a class="btn btn-info">Buy Now</a> &nbsp; &nbsp; <a class="btn btn-success">Add To Cart</a>
   					</div>
   				</div>
   			</div>
   		</div>
   		
   		<div>
   			<div class="card product-card">
   				<img class="card-img-top img-fluid" src="img/product/M7.jpg">
   				<div class="card-body">
   					<div class="card-title"> Product7</div>
   					<div class="card-text">
   						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto hic nobis molestias rem eius assumenda.<br/>
   						<a class="btn btn-info">Buy Now</a> &nbsp; &nbsp; <a class="btn btn-success">Add To Cart</a>
   					</div>
   				</div>
   			</div>
   		</div>
   		
   		
   	</div>
   </div>
   
   
   
   
   <div class="container-fluid" id="discount">
   	<div class="container discount-session-content">
   		<div class="row">
   			<div class="col-md-6">
   				<h1 class="text-light text-capitalize">
   					follow us on
   				</h1><br/>
   				<div class="social-icons">
   					<i class="fa fa-facebook" aria-hidden="true"></i>
   					<i class="fa fa-twitter" aria-hidden="true"></i> 
   					<i class="fa fa-instagram" aria-hidden="true"></i>
   				</div>
   			</div>
   			
   			<div class="col-md-6">
   				<h1>Subscribe to get discount<br/> coupons & new Offers!</h1>
   				<p class="discount-session-content-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt erat volutpat.</p><br/>
   				<form class="form-inline">
   					<div  class="form-group mx-sm-12 mb-2">
   						<label for="inputPassword2" class="sr-only">Mail Id</label> 
   						<input type="password" class="form-control" id="inputPassword2" placeholder="Enter Your Mail Id">
   						&nbsp; &nbsp;
   						
   					</div>
   					<button type="submit" class="btn btn-danger text-light mb-2">SUBSCRIBE US</button>
   				</form>
   			</div>
   			
   		</div>
   	</div>
   </div>
   
   
   
   
   <div class="container mt-5 mb-5">
   	<div class="row">
   		<div class="col-md-12 text-center text-capitalize">
   			<h1>our brand partners</h1>
   		</div>
   	</div>
   </div>
   
   <div class="container mt-5 mb-5">
   	<div class="owl-carousel owl-theme">
   		<div class="item"><img src="img/1.png" class="img-fluid"></div>
   		<div class="item"><img src="img/2.png" class="img-fluid"></div>
   		<div class="item"><img src="img/3.png" class="img-fluid"></div>
   		<div class="item"><img src="img/4.png" class="img-fluid"></div>
   		<div class="item"><img src="img/5.png" class="img-fluid"></div>
   	</div>
   </div>
   
   
   
   
 <div class="container mt-5 mb-5">
 	<div class="row">
 		<div class="col-md-6 payment-method">
 			<p class=" icon pt-5 pb-2"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></p>
 			<h2 class="text-capitalize">Paymeny methode</h2>
 			<p class="payment-methode-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, eius, totam. Corrupti, laborum dolorem corporis accusamus commodi cum voluptates, beatae sunt ab, mollitia perferendis rerum deleniti placeat porro consectetur cupiditate?</p><br/>
 			<img class="img-fluid" src="img/payment_methods.jpg">
 		</div>
 		
 		<div class="col-md-6 payment-method">
 			<p class=" icon pt-5 pb-2"><i class="fa fa-plane" aria-hidden="true"></i></p>
 			<h2 class="text-capitalize">Shipment and delivery</h2>
 			<p class="payment-methode-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, eius, totam. Corrupti, laborum dolorem corporis accusamus commodi cum voluptates, beatae sunt ab, mollitia perferendis rerum deleniti placeat porro consectetur cupiditate?</p><br/>
 			<p><i class="fa fa-arrow-right" aria-hidden="true"></i>  Free delivery over $30 purches.</p>
 			<p><i class="fa fa-arrow-right" aria-hidden="true"></i>  2 days <strong>free delivery</strong> only for <strong> prime members.</strong></p>
 		</div>
 	</div>
 </div>  
   
   
   <footer class="container-fluid mt-5">
   	<div class="container pt-5 pb-5">
   		<div class="row">
   			<div class="col-md-6">
   				<h3>WEBSEOTIPS.COM</h3>
   				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia et eligendi at illo? Repellendus explicabo earum ab repudiandae fugit et eaque iusto cumque labore! At, accusamus explicabo reprehenderit natus cumque!</p>
   				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem consequatur vero reiciendis pariatur, qui, assumenda nobis vitae quia natus quod, iste quae. Corrupti, eum, adipisci mollitia voluptatum est consequatur hic?</p>
   			</div>
   			
   			
   			<div class="col-md-3">
   			<h3>Latest products</h3>
   				<div class="media mt-5"> <img class="mr-3 img-fluid" src="img/footer images/c31.jpg" alt="">
   				<div class="media-body">
   					<h5>Woman's Dress</h5>
   					<del>$80</del> &nbsp; $70
   				</div>
   					
   				</div>
   				
   				<div class="media mt-5"> <img class="mr-3 img-fluid" src="img/footer images/c51.jpg" alt="">
   				<div class="media-body">
   					<h5>Woman's Top</h5>
   					<del>$80</del> &nbsp; $70
   				</div>
   					
   				</div>
   			</div>
   			
   			
   			
   			<div class="col-md-3">
   			<h3>Top Rated products</h3>
   				<div class="media mt-5"> <img class="mr-3 img-fluid" src="img/footer images/M2.jpg" alt="">
   				<div class="media-body">
   					<h5>Man's Dress</h5>
   					<del>$80</del> &nbsp; $70
   				</div>
   					
   				</div>
   				
   				<div class="media mt-5"> <img class="mr-3 img-fluid" src="img/footer images/M7.jpg" alt="">
   				<div class="media-body">
   					<h5>hand bresslare</h5>
   					<del>$80</del> &nbsp; $70
   				</div>
   					
   				</div>
   			</div>
   			
   		</div>
   	</div>
   </footer> 
   
   
   
   <div class="container-fluid bg-dark">
   	<div class="row">
   		<div class="col-md-12 text-capitalize text-center text-light" >
   			DESIGNED BY DEBJYOTI DAS . DATE 07/08/1019  - WEBSEOTIPS.COM
   		</div>
   	</div>
   </div>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
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