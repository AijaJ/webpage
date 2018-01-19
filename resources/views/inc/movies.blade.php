@extends('layouts.app')
@section('content')
<div class="col-md-8 col-lg-6 col-md-offset-2">
@if (count($reviews) > 0)
   @foreach($reviews as $review)

     <ul class="list-group col-md-offset-2 col-lg-8">
         <li class="list-group-item"> {{$review->name}} </li>
         
         <li class="list-group-item"> {{$review->description}} </li>
</ul>
   
  </div>

   @endforeach
@endif





@endsection