@extends('layoutMaster')
@section('main')
  <main class="main-productDetails">
    {{-- chevron section --}}
    <a href="">
      <div class="chevron-left">
          <i class="fas fa-chevron-left"></i>
      </div>
    </a>
    <a href="">
      <div class="chevron-right">
          <i class="fas fa-chevron-right"></i>
      </div>
    </a>
    
    {{-- /chevron section --}}
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