@extends('layouts.base')

@section('title', 'comic-details')

@section('main-content')
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
                <div class="col-4 pt-2">
                    <img class="img-fluid" src="{{asset('images/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection