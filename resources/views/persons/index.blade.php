@extends('layouts.app')
@section('content')
<div class="panel panel-primary col-md-6 col-lg-6">
  <div class="panel-heading">Persons</div>
  <div class="panel-body">
      
 <ul class="list-group"> 
        @foreach($persons as $person)
  <li class="list-group-item">{{$person -> name}}</li>
  @endforeach
 
  
 </ul>>
  </div>
</div>
@endsection

