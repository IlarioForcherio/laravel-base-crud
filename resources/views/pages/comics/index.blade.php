@extends('layouts.app')


@section('title','Lista - Comics')

@section('main')
<h2>Lista dei comics</h2>
{{-- bottone per la creazione di un Comic --}}

<button type="button" class="btn btn-primary">
    <a href="{{route('comics.create')}}">Aggiungi un Comic</a>
</button>



<div class="d-flex  flex-wrap container">
    @foreach ($comics as $elem )
    <div class="card-container" >
     <div class="comic-card"></div>
     <img src="{{$elem->thumb}}" alt="">
     {{--il return view di show e' in Controller (resource) cioe' nel controller che contiene le crud (ComicController) --}}
     {{-- si passa l'id che viene estrapolato da show come secondo parametro  --}}
     {{-- l'id e' quello della tabella del  db --}}
     <div><a href="{{route('comics.show', $elem->id)}}">{{$elem->title}}</a> </div>
     <div>{{$elem->year}}</div>
    </div>
    @endforeach
</div>


@endsection
