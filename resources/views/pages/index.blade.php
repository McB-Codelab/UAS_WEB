@extends('layouts.app')

@section('content') 
    <hr>
    <div class="jumbotron text-center">
        <h1>Daftar Buku Tamu Pernikahan</h1>
        <p>Untuk pasangan Raisa & Hamish.</p>
        <p><a class="btn btn-light btn-lg" href="/posts" role="button">Lihat</a></p>
    </div>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="{{URL::asset('js/javascript.js')}}"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body {font-family: "Lato", sans-serif}
    .mySlides {display: none}
    </style>
    <body>


<div class="w3-content" style="max-width:2000px;margin-top:46px">
    <div class="mySlides w3-display-container w3-center">
      <img src="img/raisa1.jpg" style="width:40%">
      <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3>Los Angeles</h3>
        <p><b>We had the best time playing at Venice Beach!</b></p>   
      </div>
    </div>
    <div class="mySlides w3-display-container w3-center">
      <img src="img/raisa2.jpg" style="width:40%">
      <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3>New York</h3>
        <p><b>The atmosphere in New York is wow.</b></p>    
      </div>
    </div>
    <div class="mySlides w3-display-container w3-center">
      <img src="img/raisa3.jpg" style="width:40%">
      <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3>Chicago</h3>
        <p><b>Thank you, Chicago - A night we won't forget.</b></p>    
      </div>
    </div>
</div>
  
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
      <h2 class="w3-wide">WEDDING PARTY</h2>
      <p class="w3-center"><i>RAISA & HAMISH</i></p>
      <p class="w3-center"><i>20 DESEMBER 2020</i></p>
      <p class="w3-center"><i>MANADO BEACH HOTEL</i></p>
    </div>

@endsection