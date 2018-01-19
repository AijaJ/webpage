@extends('layouts.app')
@section('content')
<h1><div class=" col-md-offset-2">Comments:</div></h1>

@if (count($messages) > 0)
   @foreach($messages as $message)

     <ul class="list-group col-md-offset-2 col-lg-8">
         <li class="list-group-item"> {{$message->name}} </li>
         
         <li class="list-group-item"> {{$message->comment}} </li>
</ul>
   
  
   @endforeach
@endif

@endsection