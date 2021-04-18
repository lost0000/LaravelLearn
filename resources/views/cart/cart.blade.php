@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            @if (Auth::check())
            
            {{-- <span> {{  -> carts -> count() }} --}}


            @endif
        </div>
    </div>
@endsection