
@extends('layout.app')

@section('content')
<h3>Contact page</h3>
{!! Form::open(array('url' => 'contact/submit')) !!}
    
<div class="form-group">
{{Form::label("name", 'Name' ) }}
{{Form::text("name",'', ['class'=>'form-control'] ) }}
</div>
<div class="form-group">
{{Form::label("email", 'Email' ) }}
{{Form::text("email",'', ['class'=>'form-control'] ) }}
</div>
<div class="form-group">
{{Form::label("message", 'Message' ) }}
{{Form::textarea("message",'', ['class'=>'form-control'] ) }}         
</div>
<div>
{{Form::submit('submit',['class'=>'btn btn-primary'])}}
</div>
{!! Form::close() !!}
@endsection