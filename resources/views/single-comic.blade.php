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
      <div class="thumb__details type">comic book</div>
      <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
      <div class="thumb__details gallery">view gallery</div>
    </div>
    <div class="float__left">
      <h1>Action Comics #1000: The Deluxe Edition</h1>
      <div class="available">
        <div class="available__left">
          <div>U.S. Price: <span>$19.99</span></div>
          <div>AVAILABLE</div>
        </div>
        <div class="available__right">Check Availability &#9660;</div>
      </div> 
      <p class="description">The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!   
      </p>
    </div>
    <div class="float__right">
      <div>Advertisement</div>
      <img src="{{ asset('images/adv.jpg') }}" alt=""/>
    </div>  
  </div>
</section>
@endsection