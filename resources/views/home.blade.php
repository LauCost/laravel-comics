@extends('layouts.app')

@section('main')


<div class="jumbo">
      <p class="series">CURRENT SERIES</p>
</div>

    <div class="cont flex_wrap">
        @foreach ($comics as $comic)
        <div class="card">
            <img src="{{$comic['thumb']}}" alt="" />
            <p>{{ $comic['title'] }}</p>
        </div>
        @endforeach
        <button class="load_series">LOAD MORE</button>
    </div>
    <div class="blue">
    <div class="cont dispi">
      <div class="utility">
        <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="" />
        <p>DIGITAL COMICS</p>
      </div>
      <div class="utility">
        <img src="{{asset('images/buy-comics-merchandise.png')}}" alt="" />
        <p>DC MERCHANDISE</p>
      </div>
      <div class="utility">
        <img src="{{asset('images/buy-comics-subscriptions.png')}}" alt="" />
        <p>SUBSCRIPTION</p>
      </div>
      <div class="utility">
        <img src="{{asset('images/buy-comics-shop-locator.png')}}" alt="" />
        <p>COMICS SHOP LOCATOR</p>
      </div>
      <div class="utility">
        <img src=".{{asset('images/buy-dc-power-visa.svg')}}" alt="" />
        <p>DC POWER VISA</p>
      </div>
    </div>
  </div>


@endsection
