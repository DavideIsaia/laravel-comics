@extends('layouts.app')

@section('title')
  Single Comic
@endsection

@section('main_content')
<section class="single-comic">
  <div class="blue-line">
  </div>
  <div class="container">
    <div class="thumb">
      <div class="thumb__details type">{{$comic['type']}}</div>
      <img src="{{$comic['thumb']}}" alt="">
      <div class="thumb__details gallery">view gallery</div>
    </div>
    <div class="float__left">
      <h1>{{$comic['title']}}</h1>
      <div class="available">
        <div class="available__left">
          <div>U.S. Price: <span>{{$comic['price']}}</span></div>
          <div>AVAILABLE</div>
        </div>
        <div class="available__right">Check Availability &#9660;</div>
      </div> 
      <p class="description">{{$comic['description']}}</p>
    </div>
    <div class="float__right">
      <div>Advertisement</div>
      <img src="{{ asset('images/adv.jpg') }}" alt=""/>
    </div>  
  </div>
  <div class="details">
    <div class="container">
      <div class="col talent">
        <h3>Talent</h3> 
        <div class="row">
          <h4>Art by:</h4>
          <p>@foreach($comic['artists'] as $item)
            {{$item}},
          @endforeach</p>        
        </div>
        <div class="row">
          <h4>Written by:</h4>
          <p>@foreach($comic['writers'] as $item)
            {{$item}},
          @endforeach</p>        
        </div>         
      </div>
      <div class="col">
        <h3>Specs</h3>
        <div class="row">
          <h4>Series:</h4>
          <p>ACTION COMICS</p>
        </div>
        <div class="row">
          <h4>U.S. Price:</h4>
          <p>{{$comic['price']}}</p>
        </div>
        <div class="row">
          <h4>On Sale Date:</h4>
          <p>{{\Carbon\Carbon::parse($comic['sale_date'])->format('M d Y')}}</p>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection