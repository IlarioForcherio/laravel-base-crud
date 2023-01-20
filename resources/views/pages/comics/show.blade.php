@extends('layouts.app')

@section('title','Home - Single Comic')

@section('main')
<h2 class="text-center">Single Comic</h2>

  <section class=" d-flex justify-content-center" >
     <div class="d-flex flex-column">
       <div>{{$single_comic->title}}</div>
       <img src="{{$single_comic->thumb}}" alt="">
     </div>
  </section>


  {{-- form per eliminare un elemento (DESTROY)--}}
    <form action="{{route("comics.destroy", $single_comic->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-dark" type="submit">X</button>
    </form>


  {{-- Modifica (EDIT) mandera' le modifiche a UPDATE--}}
  <div>
    <a href="{{ route('comics.edit', $single_comic->id) }}">
       <button class="btn btn-dark">Edit</button>
    </a>
  </div>

@endsection

