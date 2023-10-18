@extends('layouts.app')

@section('main-content')
<div class="container">
    <div class="content">
      <div class="card-container">
          <div class="card-comic">
              <img src="{{ $comic->thumb }}" alt="">
              <h4>{{ $comic->title }}</h4>
              <p>{{$comic->description}}</p>
          </div>
      </div>
  </div>

@endsection