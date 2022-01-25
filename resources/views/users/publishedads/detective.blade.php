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
<link rel="stylesheet" href="/css/category.css">
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
        <br><br>
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"> Categories</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
              @foreach($articles as $article)
                <li><a href="{{url('/post-classified-ads/'.$article->maincategory.'/'.$article->id)}}" style="margin-left:25px">{{$article->maincategory}}</a></li>
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
            <h3 class="new-product-title pull-left">Classics Books</h3>
          </div>
          <div style="margin-left:50px" class="row">
              <div class="row" id="Advertisements">
                    
                <div class="card">
                   
                    <div class="card-body">
                        <!-- <ul class="nav nav-item">
                            <li class="nav-item">
                                <a href="#home" class="nav-link" data-togle="tab">Classics Books</a>
                            </li>
                        </ul> -->
                        <div id="mytabcontent" class="tabcontent">
                            <div id="home">
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{url('/detective')}}" style="padding-left:20px">

                                {{csrf_field()}}

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="hidden" name="maincategoryid" value={{Request::segment(3) }}>
                                                <br><br>
                                                <label class="labelstyle"> <strong>Select Category</strong></label>
                                                <select class="form-control inputbox" name="subcategoryid" required>
                                                    <option value="">Select</option>
                                                    @if(count($subcategories)>0)
                                                        @foreach($subcategories as $subcategory)
                                                        <option value={{$subcategory->id}}>{{$subcategory->subcategory}}</option>
                                                        @endforeach

                                                    @else
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <label></label>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <br><br>
                                                <label class="labelstyle"><strong>Book Name</strong></label>
                                                <input type="text" class="form-control inputbox" name="bookname" placeholder="Book Name" required>
                                            </div>
                                        </div>
                                        <label></label>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="labelstyle"><strong>Author Name</strong></label>
                                                <input type="text" class="form-control inputbox" name="authorname" placeholder="Author Name" required>
                                            </div>
                                        </div>
                                        <label></label>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="labelstyle"><strong>Publisher</strong></label>
                                                <input type="text" class="form-control inputbox" name="publisher" placeholder="Publisher" required>
                                            </div>
                                        </div>
                                        <label></label>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="labelstyle"><strong>Language</strong></label>
                                            <input type="text" class="form-control inputbox" name="language" placeholder="language" required>
                                        </div>
                                    </div>
                                    <label></label>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="labelstyle"><strong>Binding</strong></label>
                                            <input type="text" class="form-control inputbox" name="binding" placeholder="Binding" required>
                                        </div>
                                    </div>
                                    <label></label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="labelstyle"><strong>Book Condition</strong></label>
                                            <input type="text" class="form-control inputbox" name="bookcondition" placeholder="Book Condition" required>
                                        </div>
                                    </div>
                                    <label></label>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="labelstyle"><strong>Pages</strong></label>
                                            <input type="text" class="form-control inputbox" name="pages" placeholder="Pages" required>
                                        </div>
                                    </div>
                                    <label></label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="labelstyle"><strong>Selling Price</strong></label>
                                            <input type="text" class="form-control inputbox" name="price" placeholder="Selling Price" required>
                                        </div>
                                    </div>
                                    <label></label>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="labelstyle"><strong>Your Name</strong></label>
                                            <input type="text" class="form-control inputbox" name="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <label></label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="labelstyle"><strong>Your Mobile Number</strong></label>
                                            <input type="text" class="form-control inputbox" name="mobileno" placeholder=" Mobile Number" required>
                                        </div>
                                    </div>
                                    <label></label>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="labelstyle"><strong>Your Email Id</strong></label>
                                            <input type="email" class="form-control inputbox" name="email" placeholder=" Email Id" required>
                                        </div>
                                    </div>
                                    <label></label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="labelstyle"><strong>State</strong></label>
                                            <input type="text" class="form-control inputbox" name="state" placeholder="State" required>
                                        </div>
                                    </div>
                                    <label></label>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="labelstyle"><strong>Photos (Max 4)</strong></label>
                                            <input type="file" class="form-control inputbox" name="photos[]" multipart="true" multiple required>
                                        </div>
                                    </div>
                                    <label></label>
                                </div>
                            </div>
                                    <br><br>
                            <div class="row">
                                <div class="col-lg 12">
                                    <div class="form-group" style="text-align:center;">
                                    <button type="submit" class="btn btn-primary">Post Your Ad</button>
                                    <button id="reset" class="btn btn-default">Reset</button>
                                    <br><br>
                                    </div>
                                </div>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
        </div>
            
      </div>
    </div>
   
     
  </div>

</div>



</body>
</html>