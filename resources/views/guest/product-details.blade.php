@extends('layouts.base')

@section('title', 'comic-details')

@section('main-content')
<div class="custom-bg">
    
    <div class="container ">
        <div class="row py-5">
            <div class="col-9 offset-2 me-5 pe-5 d-flex justify-content-end">
                <p class="text-uppercase my-0 me-4 my-description">advertisement</p>
            </div>
            <div class="col-8 offset-2">
                {{-- descrizione del comic con prezzo --}}
                <div class="d-flex">
                    <div class="col-8 pb-2">
                        <h4 class="text-uppercase m-0 my-title-color pb-3">{{$comic['title']}}</h4>
                        <div class="d-flex my-border-bottom">
                            <div class="w-75 py-1 px-3 d-flex justify-content-between my-bg-table">
                                <p class="m-0"> <span>U.S.Price:</span>{{$comic['price']}}</p>
                                <p class="m-0 text-uppercase"><span>available</span></p>
                            </div>
                            <div class="w-25 py-1 px-2 my-bg-table">
                                <p class="m-0">Check Availability</p>
                            </div>
                        </div>
                        <div>
                            <p class="pt-3 my-description">{{$comic['description']}}</p>
                        </div>
                    </div>
                    
                    {{-- immagine della pubblicità --}}
                    <div class="col-4 pt-2 ps-1 ms-5">
                        <img class="img-fluid" src="{{asset('images/adv.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-white my-hr" ></div>
    <div class="container mb-5 pb-5">
        <div class="row">
            <div class="col-8 offset-2 d-flex">
                {{-- talent --}}
                <div class="col-6">
                    <div class="row">
                        <div class="col-12 px-0 my-hr py-3">
                            <h6 class="my-title-color m-0">Talent</h6>
                        </div>
                    </div>
                    <div class="row my-hr py-1">
                        <div class="col-3 px-0">
                            <p class="m-0 my-title-color">Art by:</p>
                        </div>
                        <div class="col-9 px-0">
                            <p class="m-0 my-text-primary">
                                @foreach ($comic['artists'] as $artist)
                                @if (count($comic['artists']) == 1)
                                {{$artist.'.'}}
                            @else
                                {{$artist.','.' '}}
                            @endif
                                @endforeach
                            </p>
                        </div>
                    </div>
                    <div class="row my-hr py-1">
                        <div class="col-3 px-0">
                            <p class="m-0 my-title-color">Written by:</p>
                        </div>
                        <div class="col-9 px-0">
                            <p class="m-0 my-text-primary">
                                @foreach ($comic['writers'] as $writer)
                                    @if (count($comic['writers']) == 1)
                                        {{$writer.'.'}}
                                    @else
                                        {{$writer.','.' '}}
                                    @endif
                                @endforeach
                            </p>
                        </div>
                    </div>
                    
                </div>
                {{-- specs --}}
                <div class="col-6 ms-5">
                    <div class="row">
                        <div class="col-12 px-0 my-hr py-3">
                            <h6 class="my-title-color m-0">Specs</h6>
                        </div>
                    </div>
                    <div class="row my-hr py-1">
                        <div class="col-3 px-0">
                            <p class="m-0 my-title-color">Series:</p>
                            
                        </div>
                        <div class="col-9 px-0">
                            <p class="m-0 text-uppercase my-text-primary">
                                {{$comic['series']}}
                            </p>
                        </div>
                    </div>
                    <div class="row my-hr py-1">
                        <div class="col-3 px-0">
                            <p class="m-0 my-title-color">U.S. Price:</p>
                        </div>
                        <div class="col-9 px-0">
                            <p class="m-0 my-title-color">
                                {{$comic['price']}}
                            </p>
                        </div>
                    </div>
                    <div class="row my-hr py-1">
                        <div class="col-3 px-0">
                            <p class="m-0 my-title-color">On Sale Date:</p>
                        </div>
                        <div class="col-9 px-0">
                            <p class="m-0 my-title-color">
                                {{$comic['sale_date']}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection