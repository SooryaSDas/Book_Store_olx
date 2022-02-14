@extends('navbar')

@section('content')
<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
    
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp" style="padding-left: 600px; width: 131%;" >
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left"> MY CART</h3>
          </div>
        </div>
            <div style="margin-left:30px" class="row">
              <div class="row" id="Advertisements">
              <div class="card-body" style="margin-left: 20%;">
                @php $total=0;  @endphp
                            @foreach($advertisements as $item)
                                <?php
                                    $img = [];
                                    $img = explode(",", $item->photos);
                                
                                ?>
                                <div class="row" style="padding: 22px; border: 1px solid rgba(0,0,0,.125);">
                                    <div class="col-lg-6">
                                        <div class="row featured" id="featured-image">
                                            <img class="main" src="{{$img[0]}}" alt="1st image" width="60%"/>
                                        </div>
                                        
                                        <div>                                 
                                    </div>
                                    </div>
                                    <div class="col-lg-4" >
                                        <div class="card border-secondary wb-3" style="max-width:30rem !important;">
                                        <h4><div class="card-header">Book Details</div></h4>
                                                <div class="card-body" style="padding-top: 20px;">
                                                    <!-- <b><h5 class="conetent_padding">Name : </b> -->
                                                    <h2><span title="xtra large">{{$item->bookname}}</span></h2>
                                                    <!-- </h5>  -->
                                                    <h5 class="conetent_padding"> Author : 
                                                        <span title="xtra large">{{$item->authorname}}</span>
                                                    </h5>
                                                    <h5 class="conetent_padding"> Language : 
                                                        <span title="xtra large">{{$item->language}}</span>
                                                    </h5> 
                                                    <h5 class="conetent_padding">Book price : 
                                                        <span title="xtra large"> ₹ {{$item->price}}</span>
                                                    </h5> 
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="product_data">
                                              <input id="pro_id" type="hidden"  class="prod_id" value="{{$item->id}}">
                                              <input type="hidden" class="user_id" name="user_id" value={{Auth::user()->id}}>
                                              <label for="quantity">Quantity</label>
                                              <div class="input-group-text-center mb-3" style="width:130px;">
                                                  <button id="decrement" class="input-group-text changeQuantity decrement-btn">-</button>
                                                 
                                                  <input id="qtyvalue" type="text" name="quantity" class="qty-input firn-control text-center" value="{{$item->prod_qty}}">
                                                 
                                                  <button id="increment" class="input-group-text changeQuantity increment-btn">+</button>
                                              </div>
                                            </div>
                                        <br><br>
                                           <a href="/removefromcart/{{$item->cart_id}}"> <button class="btn btn-warning">Remove from cart</button></a>
                                        </div>
                                  </div>
                                  <br><br> <br><br>
                                  @php $total += $item->price * $item->prod_qty ;  @endphp
                            @endforeach
                    </div>
                    <div style="Margin-left:20%" class="btn btn-danger btn-lg btn-block">
                      <h4> TOTAL PRICE : {{$total}}</h4>
                    </div> <br><br>
                    <a href=""> <button style="Margin-left:20%" class="btn btn-success btn-lg btn-block">ORDER NOW</button></a>
                      <br><br><br><br>
              </div>
            </div>
      </div>
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">

    // $(document).ready(function(){
    //     if(window.location == "http://127.0.0.1:8000/dashboard"){
    //         var _token = $('input[name="_token"]').val();
    //         $.ajax({
    //             url:"{{ route('categories.ads')}}",
    //             method : "GET",
    //             data : {_token:_token},
    //             success : function(data){
    //                 // $('#categories').fadeIn();
    //                 $('#Advertisements').html(data);
    //                 // alert(data);
    //             }
    //         });
    //     }
    // });

    $(document).ready(function(){
        $('p img').on('click',function(){
            $('.main').attr('src',$(this).attr('src'));
        });
    });

    $(document).ready(function () {

      $('.addToCartBtn').click(function (e) { 
        e.preventDefault();

        var product_id = $('.prod_id').val();
        var product_qty = $('.qty-input').val();
        var user_id = $('.user_id').val();

        $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
          
       $.ajax({
        method: "POST",
         url: "/addtocart",
         data: {
           "product_id" : product_id,
           "product_qty" :product_qty,
           "user_id" : user_id,
         },
         success: function (response) {
          swal("Successfully Added into Cart","success");
          window.location.reload();
         }
       });

      });


      $('.increment-btn').click(function (e) { 
        e.preventDefault();
        
        // var inc_value = $('.qty-input').val();
        var inc_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(inc_value,10);
        value = isNaN(value) ? 0 : value;
        if(value < 10)
        {
          value++;
          // $('.qty-input').val(value);
          $(this).closest('.product_data').find('.qty-input').val(value);
        }
      });

      $('.decrement-btn').click(function (e) { 
        e.preventDefault();
        
        // var dec_value = $('.qty-input').val();
        var dec_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(dec_value,10);
        value = isNaN(value) ? 0 : value;
        if(value > 1)
        {
          value--;
          // $('.qty-input').val(value);
          $(this).closest('.product_data').find('.qty-input').val(value);
        }
      });

      $('.changeQuantity').click(function (e) { 
      e.preventDefault();

      var prod_id = $(this).closest(".product_data").find('.prod_id').val();
      var qty = $(this).closest(".product_data").find('.qty-input').val();
      
      $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
      data = {
        'prod_id' : prod_id,
        'prod_qty' : qty,
      }
      
      $.ajax({
        method: "POST",
        url: "/updatecart",
        data: data,
        success: function (response) {
          // swal("Success","success");
          window.location.reload();
        }
      });
    });

    });


    


function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


</script>