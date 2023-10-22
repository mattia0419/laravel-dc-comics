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

              <a data-bs-toggle="modal" data-bs-target="#delete-modal-{{ $comic->id }}">
                <i class="fa-solid fa-trash fa-lg mt-3"></i>              
              </a>
            </div>
              



              {{--  --}}
          
          @endforeach
      </div>         


  </div>
  
    <a href="{{ route('comics.create') }}" class="btn btn-success my-3">Crea il tuo fumetto</a>
{{ $comics->links('pagination::bootstrap-5') }}

</div>

@foreach($comics as $comic)
<div class="modal fade" id="delete-modal-{{ $comic->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina elemento</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Sei scuro di voler eliminare definitivamente?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                      <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Elimina</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
@endforeach



@endsection