@extends('layouts.base')

@section('title', 'comics')

@section('main-content')
<div class="row pt-4 position-relative">
    <div class="position-absolute btn btn-primary rounded-0 col-3">
        <h2 class="text-uppercase m-0">current series</h2>
    </div>
    <div class="col-12 d-flex flex-wrap mt-5 align-items-baseline">
        @foreach ($comics as $comic) 
                <div class="product-card">
                    <div class="image-product">
                        <img  src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    </div>
                    
                    <h6 class="mt-3 mb-5">{{$comic['series']}}</h6>
                    
                </div>
        @endforeach
    </div>
    <div class="col-12 d-flex justify-content-center">
        <div>
            <div class="btn btn-primary px-5 rounded-0 mb-3">
                <a href="#">Load more</a>
            </div>
        </div>
    </div>
    
</div>
    
@endsection

@section('shop-navbar')
    <div class="row py-5">
        {{-- forse questo va messo come container --}}
        <div class="col-10 offset-1 d-flex justify-content-evenly">
            @foreach ($shopLinks as $link)
            <div class="col-2 d-flex align-items-center">
                <div class="me-3">
                    <img class="shop-link-img" src="../../images/{{$link['img']}}" alt="">
                </div>
                <p class="text-uppercase m-0">
                    {{$link['name']}}
                </p>
            </div>
            @endforeach
        </div>
    </div>
@endsection
