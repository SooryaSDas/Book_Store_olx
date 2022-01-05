<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <!-- <title>memorial books</title> -->
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout home_page">
      <!-- loader  -->
      <!-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div> -->
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href=#><img src="images/logo.png" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">

                                 <li class="active"> <a href="{{ url('/') }}">Home</a> </li>

                                 <li><a href="{{ url('/books') }}">Our Books</a></li>
 
                                 <li> <a href="{{ route('login') }}" class="">Log in</a></li> 

                                 @if (Route::has('register'))
                                    <li>   <a href="{{ route('register') }}" class=>Register</a></li>
                                 @endif
                             
                                   
                                 <!-- @if (Route::has('login'))
                                       @auth

                                       <li><a href="{{ url('/dashboard') }}" class="">Dashboard</a></li> 
                                       <li> <a href="{{ route('login') }}" class="">Log in</a></li> 

                                       @else
                                           <li> <a href="{{ route('login') }}" class="">Log in</a></li> 

                                             @if (Route::has('register'))
                                             <li>   <a href="{{ route('register') }}" class=>Register</a></li>
                                             @endif
                                       @endauth
                                    @endif  -->

                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <section class="slider_section">
         <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/banner.jpg" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>The Best Libraries That<br> Every Book Lover Must<br> Visit!</h1>
                        <p>One glance at a book and you hear <br> the voice of another person, perhaps <br> someone dead for 1,000 years. <br> To read is to voyage through time.</p>
                        <div class="button_section"> <a class="main_bt" href="{{ route('register') }}">Shop Online Now</a>  </div>
                        <!-- <ul class="locat_icon">
                           <li> <a href="/facebook"><img src="icon/facebook.png"></a></li>
                           <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                           <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                           <li> <a href="#"><img src="icon/instagram.png"></a></li>
                        </ul> -->
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/pic1.jpg" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>The Best Libraries That<br> Every Book Lover Must<br> Visit!</h1>
                        <p>One glance at a book and you hear <br> the voice of another person, perhaps <br> someone dead for 1,000 years. <br> To read is to voyage through time.</p>
                        <div class="button_section"> <a class="main_bt" href="{{ route('register') }}">Shop Online Now</a>  </div>
                        <!-- <ul class="locat_icon">
                           <li> <a href="/facebook"><img src="icon/facebook.png"></a></li>
                           <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                           <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                           <li> <a href="#"><img src="icon/instagram.png"></a></li>
                        </ul> -->
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/pic2.jpg" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>The Best Libraries That<br> Every Book Lover Must<br> Visit!</h1>
                        <p>One glance at a book and you hear <br> the voice of another person, perhaps <br> someone dead for 1,000 years. <br> To read is to voyage through time.</p>
                        <div class="button_section"> <a class="main_bt" href="{{ route('register') }}">Shop Online Now</a>  </div>
                        <!-- <ul class="locat_icon">
                           <li> <a href="/facebook"><img src="icon/facebook.png"></a></li>
                           <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                           <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                           <li> <a href="#"><img src="icon/instagram.png"></a></li>
                        </ul> -->
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </section>
      <!-- about -->
      <div class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="aboutheading">
                     <h2>About <strong class="black">Us</strong></h2>
                     <span>" To learn to read is to light a fire; every syllable that is spelled out is a spark. " – Victor Hugo.</span>
                  </div>
               </div>
            </div>
            <div class="row border">
               <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                  <div class="about-box">
                     <p> One of the earliest online books marketplace in India we have stayed true to our mission of providing an extensive range of books spanning from Fiction, Non-Fiction, Literature, Classics, Academic, Competitive Exam books written by Indian and International Authors to users all across India at most affordable price. Our sincere hope is the people read more and those that read end up writing more. We're the place to be if you're scouting for your next best read or searching for the right academic source material. Thousands of titles across different genres, ready to be shipped across India at the touch of your fingertips.
                           So what are you waiting for, reader?
                           Start exploring, reading and buying now!</p>
                     <!-- <a href="#">Read More</a> -->
                  </div>
               </div>
               <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                  <div class="about-box">
                     <figure><img src="images/about.png" alt="img" /></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <!-- end about -->
      <!-- Library -->
      <div class="Library">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Our <strong class="black">Library </strong></h2>
                     <span>You probably have your favourite type of book, either fiction or non-fiction; however, you might be interested in knowing about all of the sub-type, or "generes" of book which are available.
                        All books are either non-fiction or fiction. Non-fiction books contains factual information, such as biographies and history books. Fiction books contain a story which was made up by the author. </span> 
                  </div>
               </div>
            </div>
         </div>
         <div class="bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="Library-box">
                        <figure><img src="images/Library-.jpg" alt="#"/></figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="read-more">
                     <a href="#">Read More</a>
                  </div>
               </div>
            </div>
         </div> -->
      </div>
      <!-- end Library -->
      <!--Books -->
      <div class="Books">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Our <strong class="black">Books </strong></h2>
                     <span>Action and Adventure, Classics, Comic Book or Graphic Novel, Detective and Mystery, Fantasy, Historical Fiction, Horror, Literary Fiction, Romance, Science Fiction, Short Stories, Suspense and Thrillers, Women's Fiction, Biographies and Autobiographies, Cookbooks, Essays, History, Memoir, Poetry, Self-Help, True Crime</span> 
                  </div>
               </div>
            </div>
            <div class="row box">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  <div class="book-box">
                     <figure><img src="images/horror.jpg" alt="img"/></figure>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="book-box">
                     <figure><img src="images/classic.jpg" alt="img"/></figure>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  <div class="book-box">
                     <figure><img src="images/R.jpg" alt="img"/></figure>
                  </div>
               </div>
               <div class="col-md-6 offset-md-3">
                  <p>A house that has a library in it has a soul.</p>
               </div>
            </div>
            <!-- <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="read-more">
                        <a href="#">Read More</a>
                     </div>
                  </div>
               </div>
            </div> -->
         </div>
      </div>
      <!-- end Books -->
      <!-- Contact -->
      
      <!-- end Contact -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="Follow">
                        <h3>Follow Us</h3>
                     </div>
                     <!-- <ul class="location_icon">
                        <li> <a href="#"><img src="icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                        <li> <a href="#"><img src="icon/instagram.png"></a></li>
                     </ul> -->
                  </div>
                  
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <p>Copyright 2019 All Right Reserved By Memorial book center</a></p>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>