@extends('layouts.base')

@section('title', 'comics')

@section('main-content')
<div class="row">
    @foreach ($comics as $comic) 
    
            <div class="product-card">
                <div class="image-product">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                </div>
                <div class="comic-title">
                    <h4>{{$comic['series']}}</h4>
                </div>
            </div>
    @endforeach
</div>
<div class="row mt-5">
    <div class="my-5">
        <div class="btn btn-primary px-5 rounded-0">
            <a href="#">Load more</a>
        </div>
    </div>
</div>
    
@endsection
    
