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
                          @if(count($data)>0)
                            @foreach($data as $row)
                                <div class="col-md-3">
                                    <div class="card" id="dashboardads">
                                        <img class="card-img-top" src=<?php echo strtok($row->photos, ',') ?> style="padding:10px !important; width:100%; height:182px;" alt="image"/>
                                        <div class="card-body">
                                            <h5>{{$row->bookname}}</h5>
                                            <p>{{$row->authorname}}</p>
                                            <p>{{$row->authorname}}</p>
                                            <a href='{{url("/product/view/$row->id")}}'>VIEW</a>
                                        </div>
                                    </div>
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

</x-app-layout>

                                   