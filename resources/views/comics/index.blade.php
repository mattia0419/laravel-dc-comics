@extends('layouts.app')

@section('main-content')
{{-- <div class="container">

<div class="row g-4">


@foreach ($comics as $comic)
<div class="col-3 h-100">
    <div class="card">
        <div class="card-header">
            <h4>{{$comic->title}}</h4>
        </div>
        <div class="card-body">
            <img src="{{ $comic->thumb }}" alt="">
        </div>
    </div>
</div>
@endforeach --}}
<div class="container">
    <div class="content">
      <div class="card-container">
          @foreach($comics as $comic)
          <div class="card">
              <img src="{{ $comic->thumb }}" alt="">
              <p>{{ $comic->title }}</p>
          </div>
          @endforeach
      </div>
  </div>


</div>
</div>







@endsection