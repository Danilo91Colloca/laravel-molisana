@extends('layoutMaster')
@section('main')
  <main class="main-home">
    <div class="all-products-container">
      <div class="pastaType">
        <span>le lunghe</span>
      </div>
      <div class="section lunga">
        @foreach ($pastaArray as $key=>$value)
          @if($value['tipo'] == 'lunga')
            <div class="box leLunghe-product">
              <a href="/productDetails/{{ $key + 1 }}">
                <img src={{ $value['src'] }} alt="">
              </a>
            </div>
          @endif
        @endforeach
      </div>
      {{-- section corta --}}
      <div class="pastaType">
        <span>le corte</span>
      </div>
      <div class="section corta">
        @foreach ($pastaArray as $key=>$value)
          @if($value['tipo'] == 'corta')
            <div class="box leCorte-product">
              <a href="/productDetails/{{ $key }}">
                <img src={{ $value['src'] }} alt="">
              </a>
            </div>
          @endif
        @endforeach
      </div>
      {{-- / section corta --}}
      {{-- section cortissima --}}
      <div class="pastaType">
        <span>le cortissime</span>
      </div>
      <div class="section cortissima">
        @foreach ($pastaArray as $key=>$value)
          @if($value['tipo'] == 'cortissima')
            <div class="box leLunghe-product">
              <a href="/productDetails/{{ $key }}">
                <img src={{ $value['src'] }} alt="">
              </a>
            </div>
          @endif
        @endforeach
      </div>
      {{-- / section cortissima --}}
    </div>
  </main>
@endsection
