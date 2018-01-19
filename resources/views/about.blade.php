@extends('layouts.app')
@section('content')
{!! Form::open(['url' => 'about/submit']) !!}
<div class="col-md-8 col-lg-6 col-md-offset-2">
<div class="form-group ">
    {{Form::label('name','Name')}}
    {{Form::text('name','', ['class'=>'form-control','placeholder'=>'Name'])}}
</div>
<div class="form-group">
    {{Form::label('comment','Comment')}}
    {{Form::textarea('comment','', ['class'=>'form-control','placeholder'=>'Enter comment'])}}
</div>
    
<div> 
     {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
</div>
    </div>
{!! Form::close() !!}





@endsection

