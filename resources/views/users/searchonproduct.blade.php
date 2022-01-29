@extends('navbar')

@section('content')
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
                
                    <div class="card-body">
                      <div class="row">
                          @if(count($data)>0)
                            @foreach($data as $row)
                                <div class="col-md-3">
                                    <div class="card" style="height:320px !important; width:120%; padding:8px;">
                                      <center> <img class="card-img-top" src=<?php echo strtok($row->photos, ',') ?> style="padding:8px !important; width:90%; height:182px;" alt="Categories of book"></center> 
                                        <div class="card-body" id="dashboardads">
                                          <b><p class="card-text">{{$row->bookname}}</p></b>
                                            <p class="card-text">{{$row->authorname}}</p>
                                            <a href='{{url("/product/view/$row->id")}}'><button type="button" class="btn btn-success">VIEW</button></a>
                                            <!-- <a href='{{url("/product/view/$row->id")}}'> <p class="card-text">VIEW </p></a> -->
                                        </div>
                                    </div> <br>
                                    <br>
                                </div>
                            @endforeach

                            @else
                                <h6> Sorry......Not Found !</h6>
                          @endif
                      </div>
                    </div>
              </div>
            </div>
      </div>
    </div>
   
     
  </div>
  <!-- /.container --> 
</div>
<!-- /#top-banner-and-menu --> 

@endsection