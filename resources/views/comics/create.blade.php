@extends('layouts.app')

@section('main-content')
<div class="container">
    <a href="{{ route('comics.index') }}" class="btn btn-success">Torna alla lista</a>
    <h1 class="my-5">Crea fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <div class="row g-3">
        <div class="col-3">
            <label for="title">
                Titolo
            </label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        
        <div class="col-3">
            <label for="type">
                Tipo
            </label>
            <select name="type" id="type" class="form-select">
                <option value="graphic novel">graphic novel</option>
                <option value="comic book">comic book</option>
            </select>    
        </div>
        <div class="col-3">
            <label for="series">
                Serie
            </label>
            <input type="text" name="series" id="series" class="form-control">
        </div>
        <div class="col-3">
            <label for="sale_date">
                Data
            </label>
            <input type="date" name="sale_date" id="sale_date" class="form-control">
        </div>
        
            <div class="col-3">
                <label for="price">
                    Prezzo
                </label>
                <input type="number" name="price" id="price" class="form-control">
            </div>
            <div class="col-3">
                <label for="thumb">
                    Copertina
                </label>
                <input type="url" name="thumb" id="thumb" class="form-control">
            </div>
            <div class="col-12">
            <label for="description">
                Descrizione
            </label> 
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="col-3">
            <button class="btn btn-primary">Salva</button>
        </div>

        </div>
    
    </form>
</div>



@endsection