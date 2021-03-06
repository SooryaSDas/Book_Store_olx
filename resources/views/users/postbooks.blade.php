<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> -->


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
            <br><br>
                <div class="card">
                    <div class="card-header">
                        <strong>Category</strong>
                    </div>
                    <div class="card-body">
                        <ul class="userpgcategory fa-ul" id="category">

                        <li><a href="">Classics</a></li>
                            <li><a href=""> Comic Book or Graphic Novel</a></li>
                            <li><a href="">Horror</a></li>
                            <li><a href="">Detective and Mystery</a></li>
                            <li><a href=""> Essays</a></li>
                            <li><a href="">Historical Fiction</a></li>
                            <li><a href=""> Science Fiction</a></li>
                            <li><a href=""> Biographies and Autobiographies</a></li>
                            <li><a href=""> Short Stories</a></li>
                            <li><a href=""> Action and Adventure</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
            <br><br>
               <div class="card">
                    <div class="card-header">
                        <strong>Post Your Books</strong> 
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-item">
                            <li class="nav-item">
                                <!-- <a href="#home" class="nav-link" data-togle="tab">Categories</a> -->
                            </li>
                        </ul>
                        <div id="mytabcontent" class="tabcontent">
                            <div id="home">
                                 <!-- <h3 style="padding:10px; text-align:center; color:#6d6969;">Select Your Category</h3>  -->
                                 <!-- <h4>form</h4> -->
                                 <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{url('/postbookads')}}" style="padding-left:20px">

                                    {{csrf_field()}}

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="hidden" name="maincategoryid" value={{Request::segment(3) }}>
                                                    <label> <strong>Select Category</strong></label>
                                                    <select class="form-control" name="subcategoryid" required>
                                                        <option value="">Select</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <label></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label><strong>Book Name</strong></label>
                                                    <input type="text" class="form-control" name="bookname" placeholder="Book Name" required>
                                                </div>
                                            </div>
                                            <label></label>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label><strong>Author Name</strong></label>
                                                    <input type="text" class="form-control" name="authorname" placeholder="Author Name" required>
                                                </div>
                                            </div>
                                            <label></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label><strong>Publisher</strong></label>
                                                    <input type="text" class="form-control" name="publisher" placeholder="Publisher" required>
                                                </div>
                                            </div>
                                            <label></label>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label><strong>Selling Price</strong></label>
                                                    <input type="text" class="form-control" name="price" placeholder="Selling Price" required>
                                                </div>
                                            </div>
                                            <label></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label><strong>Your Name</strong></label>
                                                    <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                                </div>
                                            </div>
                                            <label></label>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label><strong>Your Mobile Number</strong></label>
                                                    <input type="text" class="form-control" name="mobileno" placeholder=" Mobile Number" required>
                                                </div>
                                            </div>
                                            <label></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label><strong>Your Email Id</strong></label>
                                                    <input type="email" class="form-control" name="email" placeholder=" Email Id" required>
                                                </div>
                                            </div>
                                            <label></label>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label><strong>State</strong></label>
                                                    <input type="text" class="form-control" name="state" placeholder="State" required>
                                                </div>
                                            </div>
                                            <label></label>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label><strong>Photos (Max 4)</strong></label>
                                                    <input type="file" class="form-control" name="photos[]" multipart="true">
                                                </div>
                                            </div>
                                            <label></label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg 12">
                                            <div class="form-group" style="text-align:center;">
                                            <button type="submit" class="btn btn-primary">Post Your Ad</button>
                                            <button id="reset" class="btn btn-default">Reset</button>
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

</x-app-layout>
