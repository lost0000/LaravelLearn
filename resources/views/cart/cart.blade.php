@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <style>

                .card {
                  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                  max-width: 300px;
                  margin: auto;
                  text-align: center;
                  font-family: arial;
                  margin: 20px;
                }
                
                .price {
                  color: grey;
                  font-size: 22px;
                }
                
                .card button {
                  border: none;
                  outline: 0;
                  padding: 12px;
                  color: white;
                  background-color: #000;
                  text-align: center;
                  cursor: pointer;
                  width: 100%;
                  font-size: 18px;
                }
                
                .card button:hover {
                  opacity: 0.7;
                }
                
                                 </style>

<script>
    $(document).ready(function() {
        $('#cartpage').html("loading...");
        $.ajax({
           method: "GET",
           url: "{{ route('cartindex') }}" 
        }).done(function(response) {
           var results = JSON.parse(response);
           var html = ``;
           results.forEach(function(result) {
               // build a html string here
               html += `<div class="card">
                <img src="{{URL::asset('/image/coffee.jpg')}}" alt="ShopImage" style="width:100%">
               <h1>`+ result.title +  `</h1>
               <p class="price">$`+ result.price +  `</p>
               <p>Quantity: `+ result.quantity +  `</p></div></form>`
           });
           $('#cartpage').html(html);
        });
     });
     </script>

{{-- END JS --}}

 <div id="cartpage">

    
 </div>
 <div>

        <p><button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Complete Transaction</button></p>

 </div>


        </div>
    </div>
@endsection