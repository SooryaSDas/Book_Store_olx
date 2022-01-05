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
                            <li><a href="{{url('/postbooks')}}"> Comic Book or Graphic Novel</a></li>
                            <li><a href="{{url('/postbooks')}}">Horror</a></li>
                            <li><a href="{{url('/postbooks')}}">Detective and Mystery</a></li>
                            <li><a href="{{url('/postbooks')}}"> Essays</a></li>
                            <li><a href="{{url('/postbooks')}}">Historical Fiction</a></li>
                            <li><a href="{{url('/postbooks')}}"> Science Fiction</a></li>
                            <li><a href="{{url('/postbooks')}}"> Biographies and Autobiographies</a></li>
                            <li><a href="{{url('/postbooks')}}"> Short Stories</a></li>
                            <li><a href="{{url('/postbooks')}}"> Action and Adventure</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
            <br><br>
               <div class="card">
                    <div class="card-header">
                        <strong>Advertisement</strong> 
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-item">
                            <li class="nav-item">
                                <a href="#home" class="nav-link" data-togle="tab">Categories</a>
                            </li>
                        </ul>
                        <div id="mytabcontent" class="tabcontent">
                            <div id="home">
                                 <h3 style="padding:10px; text-align:center; color:#6d6969;">Select Your Category</h3> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
