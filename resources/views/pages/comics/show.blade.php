@extends('layouts.app')

@section('title','Home - Single Comic')

@section('main')
<h2 class="text-center">Single Comic</h2>
<section class=" d-flex justify-content-center" >
 <div class="d-flex flex-column" >
 <div>{{$single_comic->title}}</div>
 <img src="{{$single_comic->thumb}}" alt="">
</div>
</section>



@endsection

