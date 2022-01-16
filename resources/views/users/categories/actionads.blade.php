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
                      <div class="row">
                          @if(count($classics)>0)
                            @foreach($classics as $row)
                                <div class="col-md-3">
                                    <div class="card" style="height:320px; width:100%">
                                        <img class="card-img-top" src=<?php echo strtok($row->photos, ',') ?> style="padding:8px !important; width:100%; height:182px;" alt="Categories of book">
                                        <div class="card-body" id="dashboardads">
                                        <b><p class="card-text">{{$row->bookname}}</p></b>
                                        <p class="card-text">{{$row->authorname}}</p>
                                        <a href='{{url("/product/view/$row->id")}}'> <p class="card-text">VIEW </p></a>
                                        </div>
                                    </div> <br>
                                </div>
                            @endforeach

                            @else


                          @endif
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
