@extends('navbar')

@section('content')
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
            <h3 class="new-product-title pull-left">Detective Books</h3>
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
                                                <input type="hidden" name="userid" value={{Auth::user()->id}}>
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
@endsection