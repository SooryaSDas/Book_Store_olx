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

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="/css/asset/font-awesome.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body class="cnt-home">
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
          <div class="logo"> <a href=""> <img src="images/logo.png" alt="logo"> </a> </div>
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
          <a href='{{url("/postads")}}'> <button type="button" style="margin-top: -61px; margin-left: 749px; width:20px}" class="btn btn-warning ">+ SELL</button></a>
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
 
    <br>

        
         <a style="color:white;padding: 0;" ><b>{{ Auth::user()->name }}</b> <b class="caret"></b></a>
          
              <form method="POST" action="{{ route('logout') }}" >
              @csrf
              <x-dropdown-link :href="route('logout')"
                  onclick="event.preventDefault();
                  this.closest('form').submit();" style="color:wheat;">
                <p>  {{ __('Log Out') }}</p>
                </x-dropdown-link>
            </form>
       

        







    
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
        
        <!-- ============================================== INFO BOXES ============================================== -->
        <div class="info-boxes wow fadeInUp">
          <div class="info-boxes-inner">
            <div class="row">
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">Thousands of Books</h4>
                    </div>
                  </div>
                  <h6 class="text">Thousands of sub categories of book in one hand</h6>
                </div>
              </div>
              <!-- .col -->
              
              <div class="hidden-md col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">free shipping</h4>
                    </div>
                  </div>
                  <h6 class="text"> Free shipping available for orders </h6>
                </div>
              </div>
              <!-- .col -->
              
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">Special Sale</h4>
                    </div>
                  </div>
                  <h6 class="text">Only Memorial gives the best price of your books </h6>
                </div>
              </div>
              <!-- .col --> 
            </div>
            <!-- /.row --> 
          </div>
          <!-- /.info-boxes-inner --> 
          
        </div>
        <!-- /.info-boxes --> 
        <!-- ============================================== INFO BOXES : END ============================================== --> 
        <!-- ============================================== SCROLL TABS ============================================== -->
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left"> Books</h3>
          </div>
        </div>
            <div style="margin-left:30px" class="row">
              <div class="row" id="Advertisements">
                <?php
                   if($ads->count()>0){
                      foreach($ads as $row){
                        $output.= 
                          '<div class="col-md-3" style="width:200px;"> 
                              <div class="card" style="height:350px !important; width:190px; width: 190px; border: 1px solid rgba(0,0,0,.125);" id="main_divbody">
                                <img class="card-img-top" src='.strtok($row->photos, ',').' style="padding:10px !important; width:100%; height:182px;" alt="image"/>
                                <div class="card-body"  id="dashboardads"> 
                                  <b><p class="card-text">'.$row->bookname.'</p></b>
                                  <p>'.$row->authorname.'</p>
                                  <p>'. '₹ ' .$row->price.'</p>
                                  <button type="button" class="btn btn-success"><a style="color:white" href=/product/view/'.$row->id.'> VIEW </a></button>
                                </div>
                              </div>
                              <br>
                            </div>
                           ';
                        }
                        $output.='';
                        echo $output;
                    }
                    else{
                      $output.= '<p>Not Found</p>';
                                    
                     }   
                ?>
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