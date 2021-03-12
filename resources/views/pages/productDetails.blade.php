@extends('layoutMaster')
@section('main')
  <main class="main-productDetails">
      <div class="product-title">
        <span>{{ $pastaArray[$idPasta]['titolo'] }}</span>
      </div>
      <div class="images-box">
          <img src={{ $pastaArray[$idPasta]['src-h'] }} alt="">
          <img src={{ $pastaArray[$idPasta]['src-p'] }} alt="">
      </div>
      <div class="product-description">
        <p>{!! nl2br($pastaArray[$idPasta]['descrizione']) !!}</p>
      </div>
  </main>
@endsection