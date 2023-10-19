@extends('layouts.app')
@section('f-a')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
@endsection
@section('main-content')

<div class="container">
    <div class="content">
      <div class="card-container">
          @foreach($comics as $comic)
          <div class="card-comic">
              <img src="{{ $comic->thumb }}" alt="">
              <p>{{ $comic->title }}</p>
              <a href="{{ route('comics.show', $comic) }}">
                <i class="fa-solid fa-eye fa-lg"></i>
              </a>
              <a href="{{ route('comics.edit', $comic) }}">
                <i class="fa-solid fa-pen fa-lg"></i>              
              </a>

          </div>
          @endforeach
      </div>         


  </div>
    <a href="{{ route('comics.create') }}" class="btn btn-success">Crea il tuo fumetto</a>


</div>
</div>







@endsection