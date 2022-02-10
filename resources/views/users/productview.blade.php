<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">
<!-- <title>Flipmart premium HTML5 & CSS3 Template</title> -->

<!-- Bootstrap Core CSS -->

<link rel="stylesheet" href="/css/asset/bootstrap.min.css">

<!-- Customizable CSS -->
<link rel="stylesheet" href="/css/dashboard.css">
<link rel="stylesheet" href="/css/asset/main.css">
<link rel="stylesheet" href="/css/asset/blue.css">
<link rel="stylesheet" href="/css/asset/owl.carousel.css">
<link rel="stylesheet" href="/css/asset/owl.transitions.css">
<link rel="stylesheet" href="/css/asset/animate.min.css">
<link rel="stylesheet" href="/css/asset/rateit.css">
<link rel="stylesheet" href="/css/asset/bootstrap-select.min.css">

<link rel="stylesheet" href="/css/category.css">


<!-- Icons/Glyphs -->
<link rel="stylesheet" href="/css/asset/font-awesome.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body class="cnt-home">
  <?php
    use App\Http\Controllers\MainCategoryController;
    $total = MainCategoryController::cartitem();
  ?>
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
 
  <!-- /.header-top --> 
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">   <br>
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="/dashboard"> <img src="/images/logo.png" alt="logo"> </a> </div>
          <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
        <br>  <br>
        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form action="{{url('/product/search')}}" method="post">
            {{csrf_field()}}
              <div class="control-group">
                <input type="text" name="searchproduct" required class="search-field" placeholder="Search here..." />
                <button style="margin-left:134px" class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>
              </div>
            </form>

            
          </div>
          <!-- <div style="margin-left: 749px; background: #006cb4;">
            <div class="basket">
              <a href='{{url("/cartlist")}}'><i id="shopingcart" class="icon fa fa-shopping-cart"></i></a>
              <span style="margin-top:-19px" id="count" class="count">{{$total}}</span>
            </div>
          </div> -->
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
 
    <br>

    <div id="userdetailspro" class="dropdown">
        <button style="padding-top: 4%;" onclick="myFunction()" class="dropbtn">{{ Auth::user()->name }}</button><b id="arrow" class="caret"></b> 
          <div id="myDropdown" class="dropdown-content">
              <a href='{{url("/postads")}}'> + SELL</a>
              <a href='{{url("/cartlist")}}'>MY CART</a>
              <a href='{{url("/mysellingbooks")}}'>My ADS</a>
              <form method="POST" action="{{ route('logout') }}" >
                @csrf
                <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                    this.closest('form').submit();" style="color:black;">
                  <p>  {{ __('Logout') }}</p>
                  </x-dropdown-link>
              </form>
          </div>
      </div>

      <div id="shopping">
            <div class="basket">
              <a href='{{url("/cartlist")}}'><i  style=" margin-left: 1076px; margin-top: -20px; background: #006cb4;" id="shopingcart" class="icon fa fa-shopping-cart"></i></a>
              <span id="countpro" class="count">{{$total}}</span>
            </div>
          </div>
    <!-- /.container --> 
  </div>
            
      </div>
   <br>
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active dropdown yamm-fw"> <a href="" >Home</a> </li>
                <li class="dropdown yamm mega-menu"> <a href="" >Classics</a></li>
                <li class="dropdown mega-menu"> 
                <a href="">Comic Book</a>
                </li>
                <li class="dropdown hidden-sm"> <a href="">	Horror</a> </li>
                <li class="dropdown hidden-sm"> <a href="">Detective </a> </li>
                <li class="dropdown"> <a href="">Essays</a> </li>
                <li class="dropdown"> <a href="">Historical Fiction</a> </li>
                <li class="dropdown"> <a href="">Science Fiction</a> </li>
                <li class="dropdown"> <a href="">Short Stories</a> </li>
               
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 
  
</header>

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"> Categories</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
              @foreach($articles as $article)
                <li><a href="{{url('/viewads/'.$article->maincategory.'/'.$article->id)}}" style="margin-left:25px">{{$article->maincategory}}</a></li>
              @endforeach   
              
          </nav>
          <!-- /.megamenu-horizontal --> 
        </div>
        <!-- /.side-menu --> 
        <!-- ================================== TOP NAVIGATION : END ================================== --> 
    
      </div>
      <!-- /.sidemenu-holder --> 
      <!-- ============================================== SIDEBAR : END ============================================== --> 
      
      <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
    
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left"> Books</h3>
          </div>
        </div>
            <div style="margin-left:30px" class="row">
              <div class="row" id="Advertisements">
              <div class="card-body">
                    @if(isset($product))
                        @if(count($product)>0)
                            @foreach($product as $ad)
                                <?php
                                    $img = [];
                                    $img = explode(",", $ad->photos);
                                
                                ?>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row featured" id="featured-image">
                                            <img class="main" src="{{$img[0]}}" alt="1st image" width="80%"/>
                                        </div>
                                        <div class="column">
                                            <p>
                                                <br> 
                                                @if(isset($img[1]))
                                                <img src="{{$img[1]}}" alt="2st image" width="100px" height="100px"/>
                                                @endif
                                                @if(isset($img[2]))
                                                <img src="{{$img[2]}}" alt="3st image" width="100px" height="100px"/>
                                                @endif
                                                @if(isset($img[3]))
                                                <img src="{{$img[3]}}" alt="4st image" width="100px" height="100px"/>
                                                @endif
                                            </p>
                                        </div>
                                        <div>
                                        <form action="{{url('/addtocart')}}" method="post">
                                        {{csrf_field()}}
                                          <input type="hidden" name="product_id" value={{$ad->id}}>
                                          <input type="hidden" name="user_id" value={{Auth::user()->id}}>
                                          <button type="submit" class="btn btn-warning btn-lg" >ADD TO CART</button>
                                        </form>
                                    
                                    <a href="#"> <button id="buynow" type="button" class="btn btn-success btn-lg">BUY NOW</button></a>                                          
                                    </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-lg-6" >
                                        <div class="card border-secondary wb-3" style="max-width:30rem !important;">
                                        <b> <div class="card-header">Book Details</div></b>
                                                <div class="card-body" style="padding-top: 20px;">
                                                    <b><h4 class="conetent_padding">Book Name : </b>
                                                    <b> <span title="xtra large">{{$ad->bookname}}</span></b>
                                                    </h4> 
                                                    <h5 class="conetent_padding"> Author : 
                                                        <span title="xtra large">{{$ad->authorname}}</span>
                                                    </h5>
                                                    <h5 class="conetent_padding"> Language : 
                                                        <span title="xtra large">{{$ad->language}}</span>
                                                    </h5> 
                                                    <h5 class="conetent_padding"> Book Publisher : 
                                                        <span title="xtra large">{{$ad->publisher}}</span>
                                                    </h5>
                                                    <h5 class="conetent_padding"> Binding : 
                                                        <span title="xtra large">{{$ad->binding}}</span>
                                                    </h5>
                                                    <h5 class="conetent_padding"> Book Condition : 
                                                        <span title="xtra large">{{$ad->bookcondition}}</span>
                                                    </h5>
                                                    <h5 class="conetent_padding">Book price : 
                                                        <span title="xtra large"> ₹ {{$ad->price}}</span>
                                                    </h5> 
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="card border-secondary wb-3" style="max-width:20rem !important;">
                                        <b> <div class="card-header">Seller Details</div></b>
                                                <div class="card-body">
                                                    <h5 class="conetent_padding">Name : 
                                                        <span title="xtra large">{{$ad->name}}</span>
                                                    </h5> 
                                                    <h5 class="conetent_padding"> Mobile Number : 
                                                        <span title="xtra large">{{$ad->mobileno}}</span>
                                                    </h5>
                                                    <h5 class="conetent_padding"> Email : 
                                                        <span title="xtra large">{{$ad->email}}</span>
                                                    </h5> 
                                                    <h5 class="conetent_padding">State : 
                                                        <span title="xtra large">{{$ad->state}}</span>
                                                    </h5> 
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                            @endforeach
                            @else
                                <p>Not Found</p>
                        @endif
                    @endif
                    </div>
              </div>
            </div>
      </div>
    </div>
   
     
  </div>
  <!-- /.container --> 
</div>
<!-- /#top-banner-and-menu --> 
</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

    // $(document).ready(function(){
    //     if(window.location == "http://127.0.0.1:8000/dashboard"){
    //         var _token = $('input[name="_token"]').val();
    //         $.ajax({
    //             url:"{{ route('categories.ads')}}",
    //             method : "GET",
    //             data : {_token:_token},
    //             success : function(data){
    //                 // $('#categories').fadeIn();
    //                 $('#Advertisements').html(data);
    //                 // alert(data);
    //             }
    //         });
    //     }
    // });

    $(document).ready(function(){
        $('p img').on('click',function(){
            $('.main').attr('src',$(this).attr('src'));
        });
    });


function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


</script>