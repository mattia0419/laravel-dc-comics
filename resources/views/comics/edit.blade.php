@extends('layouts.app')

@section('main-content')
<div class="container">
    <a href="{{ route('comics.index') }}" class="btn btn-success">Torna alla lista</a>
    <h1 class="my-5">Modifica fumetto</h1>

    <form action="{{ route('comics.update', $comic) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row g-3">
        <div class="col-4">
            <img src="{{ $comic->thumb }}" alt="" id="preview-image" class="img-fluid">
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-3">
            <label for="title">
                Titolo
            </label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $comic->title }}">
        </div>
        
        <div class="col-3">
            <label for="type">
                Tipo
            </label>
            <select name="type" id="type" class="form-select">
                <option value="graphic novel" @if($comic->type == 'graphic novel') selected @endif>graphic novel</option>
                <option value="comic book" @if($comic->type == 'comic book') selected @endif>comic book</option>
            </select>    
        </div>
        <div class="col-3">
            <label for="series">
                Serie
            </label>
            <input type="text" name="series" id="series" class="form-control" value="{{ $comic->series }}">
        </div>
        <div class="col-3">
            <label for="sale_date">
                Data
            </label>
            <input type="date" name="sale_date" id="sale_date" class="form-control" value="{{ $comic->sale_date }}">
        </div>
        
            <div class="col-3">
                <label for="price">
                    Prezzo
                </label>
                <input type="number" name="price" id="price" class="form-control" value="{{ $comic->price }}">
            </div>
            <div class="col-3">
                <label for="thumb">
                    Copertina
                </label>
                <input type="url" name="thumb" id="thumb" class="form-control" value="{{ $comic->thumb }}">
            </div>
            <div class="col-12">
            <label for="description">
                Descrizione
            </label> 
            <textarea name="description" id="description" cols="30" rows="10" class="form-control" value="{{ $comic->description }}"></textarea>
        </div>
        <div class="col-3">
            <button class="btn btn-primary">Salva</button>
        </div>

            </div>
        </div>
        
        </div>
    
    </form>
</div>



@endsection
@section('scripts')
<script>
    const previewImageEl = document.getElementById('preview-image');
    const thumbInput = document.getElementById('thumb');

    thumbInput.addEventListener('change', function(){
        previewImageEl.src = this.value;
    })
</script>
@endsection