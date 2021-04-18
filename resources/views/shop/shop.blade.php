@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">


        {{-- JS --}}

        {{-- <script>
            $(document).ready(function() {
                $('#shoppage').html("loading...");
                $.ajax({
                   method: "GET",
                   url: "{{ route('shop') }}" 
                }).done(function(response) {
                   var results = JSON.parse(response);
                   var html = ``;
                   results.forEach(function(result) {
                       // build a html string here
                       html += `<div class="card">
                        <img src="{{URL::asset('/image/coffee.jpg')}}" alt="ShopImage" style="width:100%">
                        <h1>`+ result.title +  `</h1>
                        <p class="price">`+ result.price +  `</p>
                        <p>`+ result.type +  `</p>
                        <p><button>Add to Cart</button></p>
                        </div>` 
                        + result.property;
                   });
                   $('#shoppage').html(html);
                });
             });
             </script> --}}

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
                    $('#shoppage').html("loading...");
                    $.ajax({
                       method: "GET",
                       url: "{{ route('index') }}" 
                    }).done(function(response) {
                       var results = JSON.parse(response);
                       var html = ``;
                       results.forEach(function(result) {
                           // build a html string here
                           html += '<form action="{{ route('index') }}" method="POST"> <input type="hidden" name="_token" value="{{ csrf_token() }}">' +
                            `<div class="card">` + `<input type="hidden" name="product_id" value="` + result.id + `"/>` + ` 
                           <img src="{{URL::asset('/image/coffee.jpg')}}" alt="ShopImage" style="width:100%">
                           <h1>`+ result.title +  `</h1>
                           <p class="price">`+ result.price +  `</p>
                           <p>`+ result.type +  `</p>`;
                           @if (Auth::check())
                           html += `<p><button type="submit">Add to Cart</button></p>`
                           @endif
                           html += `</div>`
                           + '</form>'
                       });
                       $('#shoppage').html(html);
                    });
                 });
                 </script>
    
            {{-- END JS --}}

             <div id="shoppage">
             </div>
            
             

        </div>
    </div>
@endsection

