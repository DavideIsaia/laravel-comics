@extends('layouts.app')

@section('title')
  DC Comics
@endsection

@section('main_content')
<section class="comics">
  <div class="container">
    <h3 class="comics__blue">Currrent Series</h3>
    <div class="comics__list">
      @foreach ($data as $card)
        <div class="comics">
          <img src="{{$card['thumb']}}" alt="" />
          <h5>{{ $card['type'] }}</h5>
          <h4>{{ $card['series'] }}</h4>
          <h6>{{ $card['price'] }}</h6>
        </div>          
      @endforeach
    </div>
  </div>
  <button class="comics__btn">Load More</button>
</section>
@endsection