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
                                           <a href="#"><button type="button" class="btn btn-warning btn-lg">ADD TO CARD</button></a>
                                           <a href="#"> <button type="button" class="btn btn-danger btn-lg">BUY NOW</button></a>                                          
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card border-secondary wb-3" style="max-width:20rem; border:1px solid #cc !important;">
                                                <div class="card-header">Book Details</div>
                                                    <div class="card-body">
                                                        <h6>Name : 
                                                            <span title="xtra large">{{$ad->bookname}}</span>
                                                        </h6> 
                                                        <hr>
                                                        <h6> Author : 
                                                            <span title="xtra large">{{$ad->authorname}}</span>
                                                        </h6>
                                                        <hr>
                                                        <h6> Language : 
                                                            <span title="xtra large">{{$ad->language}}</span>
                                                        </h6> 
                                                        <hr>
                                                        <h6> Book Publisher : 
                                                            <span title="xtra large">{{$ad->publisher}}</span>
                                                        </h6>
                                                        <hr>
                                                        <h6> Binding : 
                                                            <span title="xtra large">{{$ad->binding}}</span>
                                                        </h6> 
                                                        <hr>
                                                        <h6> Book Condition : 
                                                            <span title="xtra large">{{$ad->bookcondition}}</span>
                                                        </h6>
                                                        <hr>
                                                        <h6>Book price : 
                                                            <span title="xtra large"> ₹ {{$ad->price}}</span>
                                                        </h6> 
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="card border-secondary wb-3" style="max-width:20rem; border:1px solid #cc !important;">
                                                <div class="card-header">Seller Details</div>
                                                    <div class="card-body">
                                                        <h6>Name : 
                                                            <span title="xtra large">{{$ad->name}}</span>
                                                        </h6> 
                                                        <hr>
                                                        <h6> Mobile Number : 
                                                            <span title="xtra large">{{$ad->mobileno}}</span>
                                                        </h6>
                                                        <hr>
                                                        <h6> Email : 
                                                            <span title="xtra large">{{$ad->email}}</span>
                                                        </h6> 
                                                        <hr>
                                                        <h6>State : 
                                                            <span title="xtra large">{{$ad->state}}</span>
                                                        </h6> 
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

</x-app-layout>
