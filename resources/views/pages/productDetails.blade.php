@extends('layoutMaster')
@section('main')

  <main class="main-productDetails">
    {{-- chevron section --}}
    <a href="/pages/productDetails/{{ $idPasta}}">
      <div class="chevron-left">
          <i class="fas fa-chevron-left"></i>
      </div>
    </a>
    @if ($idPasta <= 0)
      <a href="/pages/productDetails/{{ count($pastaArray)}}">
        <div class="chevron-left">
            <i class="fas fa-chevron-left"></i>
        </div>
      </a>
    @endif

    <a href="/pages/productDetails/{{ $idPasta + 2 }}">
      <div class="chevron-right">
          <i class="fas fa-chevron-right"></i>
      </div>
    </a>
    @if (($idPasta) === (count($pastaArray) - 1))
      <a href="/pages/productDetails/1">
        <div class="chevron-right">
            <i class="fas fa-chevron-right"></i>
        </div>
      @endif
    

    
    
    {{-- /chevron section --}}
    <div class="product-title">
      <span>{{ $pastaArray[$idPasta]['titolo'] }}</span>
    </div>
    <div class="images-box">
        <img src={{ $pastaArray[$idPasta]['src-h'] }} alt="">
        <img src={{ $pastaArray[$idPasta]['src-p'] }} alt="">
    </div>
    <div class="product-description-container">
      <div class="productDetails-content">
        <p>{!! nl2br($pastaArray[$idPasta]['descrizione']) !!}</p>
      </div>
    </div>
  </main>
@endsection