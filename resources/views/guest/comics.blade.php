@extends('layouts.base')

@section('title', 'comics')

@section('main-content')
<div class="row pt-4">
    <div class="col-12 d-flex flex-wrap mt-5">
        @foreach ($comics as $comic) 
        
                <div class="product-card">
                    <div class="image-product">
                        <img  src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    </div>
                    
                    <h4 class="mt-3">{{$comic['series']}}</h4>
                    
                </div>
        @endforeach
    </div>
    <div class="col-12 d-flex justify-content-center">
        <div>
            <div class="btn btn-primary px-5 rounded-0">
                <a href="#">Load more</a>
            </div>
        </div>
    </div>
    
    
</div>
    
@endsection
    
