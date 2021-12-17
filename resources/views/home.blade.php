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
    <!-- <Utility /> -->


@endsection
