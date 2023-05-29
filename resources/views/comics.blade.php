@extends('layouts.app')
@section('content')

<div class="comics_cards">
    <div class="jumbotron position-relative">
    <div class="container">
    <div class="row">
      <div class="col d-flex flex-colums">
        <div class="p-2 px-4 position-absolute current_series bg-primary text-white font-weight-bolder">CURRENT SERIES</div>
      </div>
    </div>
  </div>
  </div>
  <div class="pt-5">
    <div class="container mt-5 pb-3 d-flex flex-column align-items-center">
        <div class="row g-4">
            {{-- @foreach ($products as $key => $value)
            <div class="col-2">
                <div class="card border-0 rounded-0">
                    <img class="img-fluid card-img-top comics_poster" src="{{ $value['thumb'] }}" alt="{{ $value['series'] }}">
                </div>
                <h6 class="card-title text-white text-center mt-2 text-uppercase">
                    {{ $value['series'] }}
                </h6>
            </div>
            @endforeach --}}
        </div>
        <button class="mt-5 mb-0 py-2 px-5 text-dark border-0 load_more bg-primary text-white font-weight-bolder">LOAD MORE</button>
    </div>
</div>

    </div>
  </div>
  </div>
    </div>
    
@endsection