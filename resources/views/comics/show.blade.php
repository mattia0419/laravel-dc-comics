@extends('layouts.app')

@section('main-content')
<div class="container">
    <a href="{{ route('comics.index') }}" class="btn btn-success">Torna alla lista</a>
    <a href="{{ route('comics.edit', $comic) }}" class="btn btn-success">Modifica</a>
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