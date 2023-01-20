@extends('layouts.app')

@section('title','Form - Single Comic')

@section('main')
<h1 class="text-center">Form per la Edit</h1>

{{-- Form - Create --}}
<section class="container">


    <form method="POST" action="{{ route("comics.update", $comics->id) }}">

        @csrf
        @method('PUT')
        {{-- il metodo PUT = aggiornamento --}}
        {{-- @csrf crea un input di tipo hidden che invia un token che genera un informazione che viene inviata al server per protezione ed e' OBBLIGATORIO --}}

        {{-- title --}}
        <div class="mb-3">
          <label class="form-label">Title</label>
          <input value="{{$comics->title }}" name="title" type="string" class="form-control" id="title">
        </div>
        {{-- description --}}
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea value="{{$comics->description }}" name="description" type="text" id="" cols="50" rows="3"></textarea>
          </div>
          {{-- thumb --}}
          <div class="mb-3">
            <label class="form-label">Image</label>
            <input value="{{$comics->thumb }}" name="thumb" type="string" class="form-control" id="title">
          </div>
          {{-- price --}}
          <div class="mb-3">
            <label class="form-label">Price</label>
            <input value="{{$comics->price }}" name="price" type="string" class="form-control" id="title">
          </div>
          {{-- series --}}
          <div class="mb-3">
            <label class="form-label">Serie</label>
            <input value="{{$comics->series }}" name="series" type="string" class="form-control" id="title">
          </div>
          {{-- sale_date --}}
          <div class="mb-3">
            <label class="form-label">Anno uscita</label>
            <input value="{{$comics->sale_date }}" name="sale_date" type="string" class="form-control" id="title">
          </div>
          {{-- type --}}
          <div class="mb-3">
            <label class="form-label">Genre</label>
            <input value="{{$comics->type }}" name="type" type="string" class="form-control" id="title">
          </div>
        <button type="submit" class="btn btn-primary">Crea Comic</button>
    </form>

</section>


{{-- nell'edit aggiungo l'attributo value a cui passero' il valore delle colonne della tabella --}}
{{-- l'informazione e' proveniente dalla funzione edit proveniente da ComicController --}}

@endsection
