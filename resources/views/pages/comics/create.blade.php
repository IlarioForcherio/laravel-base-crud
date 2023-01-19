

@extends('layouts.app')

@section('title','Form - Single Comic')

@section('main')
<h1 class="text-center">Form per la Create</h1>

{{-- Form - Create --}}
<section class="container" >

    {{-- l'attributo name="" e' obbligatorio e sara' compilato con il nome della rispettiva colonna del database, senza il name accoppiato l'informazione non verra' mandata --}}

    {{--l'attributo type fa riferimento al tipo di dato (text,string,id,smallInt ecc...)  --}}
    <form method="" action="">
        {{-- title --}}
        <div class="mb-3">
          <label class="form-label">Title</label>
          <input name="title" type="text" class="form-control" id="title">
        </div>
        {{-- description --}}
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" type="text" id="" cols="50" rows="3"></textarea>
          </div>
          {{-- thumb --}}
          <div class="mb-3">
            <label class="form-label">Image</label>
            <input name="thumb" type="string" class="form-control" id="title">
          </div>
          {{-- price --}}
          <div class="mb-3">
            <label class="form-label">Price</label>
            <input name="price" type="string" class="form-control" id="title">
          </div>
          {{-- series --}}
          <div class="mb-3">
            <label class="form-label">Serie</label>
            <input name="series" type="string" class="form-control" id="title">
          </div>
          {{-- sale_date --}}
          <div class="mb-3">
            <label class="form-label">Anno uscita</label>
            <input name="sale_date" type="string" class="form-control" id="title">
          </div>
          {{-- type --}}
          <div class="mb-3">
            <label class="form-label">Genre</label>
            <input name="type" type="string" class="form-control" id="title">
          </div>
        <button type="submit" class="btn btn-primary">Crea Comic</button>
    </form>

</section>




@endsection

