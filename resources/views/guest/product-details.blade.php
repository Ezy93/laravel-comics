@extends('layouts.base')

@section('title', 'comic-details')

@section('main-content')
<div class="container">
    <div class="row py-5">
        <div class="col-8 offset-2 d-flex justify-content-end">
            <p class="text-uppercase m-0">advertisement</p>
        </div>
        <div class="col-8 offset-2">
            {{-- descrizione del comic con prezzo --}}
            <div class="d-flex">
                <div class="col-8 pb-2">
                    <h4 class="text-uppercase m-0">action comics #1000: the deluxe edition</h4>
                    <div class="d-flex">
                        <div class="w-75 d-flex justify-content-between">
                            <p class="m-0">U.S.Price: <span>$19.99</span></p>
                            <p class="m-0 text-uppercase">available</p>
                        </div>
                        <div class="w-25">
                            <p class="m-0">Check Availability</p>
                        </div>
                    </div>
                    <div>
                        <p class="pt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est magnam tempore cupiditate et laborum fuga itaque. Natus, officia eaque, tempore impedit tempora hic quaerat ratione illo, saepe voluptatem rem? Repellat!</p>
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
{{-- da eliminare lo style in line messo solo per la progettazione del contenuto --}}
<div class="bg-white" style="border-bottom: 4px solid yellow"></div>
<div class="container">
    <div class="row">
        <div class="col-8 offset-2 d-flex">
            {{-- talent --}}
            <div class="col-6">
                <div class="row">
                    <div class="col-12" style="border-bottom: 1px solid yellow">
                        <h6>Talent</h6>
                    </div>
                </div>
                <div class="row" style="border-bottom: 1px solid yellow">
                    <div class="col-3 px-0">
                        <p class="m-0">Art by:</p>
                    </div>
                    <div class="col-9 px-0">
                        <p class="m-0">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus laborum dignissimos assumenda porro ea doloremque deleniti culpa soluta magni libero recusandae autem animi excepturi, amet molestias quibusdam labore similique fugiat.
                        </p>
                    </div>
                </div>
                <div class="row" style="border-bottom: 1px solid yellow">
                    <div class="col-3 px-0">
                        <p class="m-0">Written by:</p>
                    </div>
                    <div class="col-9 px-0">
                        <p class="m-0">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus laborum dignissimos assumenda porro ea doloremque deleniti culpa soluta magni libero recusandae autem animi excepturi, amet molestias quibusdam labore similique fugiat.
                        </p>
                    </div>
                </div>
                
            </div>
            {{-- specs --}}
            <div class="col-6 ms-5">
                <div class="row">
                    <div class="col-12" style="border-bottom: 1px solid yellow">
                        <h6>Specs</h6>
                    </div>
                </div>
                <div class="row" style="border-bottom: 1px solid yellow">
                    <div class="col-3 px-0">
                        <p class="m-0">Series:</p>
                    </div>
                    <div class="col-9 px-0">
                        <p class="m-0 text-uppercase">
                            action comics
                        </p>
                    </div>
                </div>
                <div class="row" style="border-bottom: 1px solid yellow">
                    <div class="col-3 px-0">
                        <p class="m-0">U.S. Price:</p>
                    </div>
                    <div class="col-9 px-0">
                        <p class="m-0">
                            $19.99
                        </p>
                    </div>
                </div>
                <div class="row" style="border-bottom: 1px solid yellow">
                    <div class="col-3 px-0">
                        <p class="m-0">On Sale Date:</p>
                    </div>
                    <div class="col-9 px-0">
                        <p class="m-0">
                            Oct 02 2018
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection