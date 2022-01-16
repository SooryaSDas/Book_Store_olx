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
                                    <div class="productcard">
                                        <img src=<?php echo strtok($row->photos, ',') ?> style="padding:10px !important; width:100%; height:182px;"/>
                                        <h5 style="margin-bottom: 0px;">{{$row->bookname}}</h5>
                                        <h6 style="margin-bottom: 0px;">{{$row->authorname}}</h6>
                                        <p> <a href='{{url("/product/view/$row->id")}}'>VIEW</a></p>
                                    </div>
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
