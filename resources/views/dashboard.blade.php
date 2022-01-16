<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
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
                        @foreach($articles as $article)
                            <li><a href="{{url('/viewads/'.$article->maincategory.'/'.$article->id)}}">{{$article->maincategory}}</a></li>
                        @endforeach    
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
                        <!-- <ul class="nav nav-item">
                            <li class="nav-item">
                                <a href="#home" class="nav-link" data-togle="tab">Categories</a>
                            </li>
                        </ul>
                        <div id="mytabcontent" class="tabcontent">
                            <div id="home">
                                <h3 style="padding:10px; text-align:center; color:#6d6969;">Select Your Category</h3> 
                            </div>
                        </div> -->
                        <!-- <div class="col-lg-12">
                            @if(session('info'))
                                <div class="alert alert-success" style="margin-top:5px;">
                                    {{session('info')}}
                                </div>
                            @endif   
                        </div> -->

                        <div class="row" id="Advertisements">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
