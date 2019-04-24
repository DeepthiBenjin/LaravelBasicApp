@extends('layout.app')

@section('content')
<h3>Messages</h3>
@if(count($messages)>0)
@foreach($messages as $message)
<ul class="list-group">
<li class="list-group-item"> {{$message->name}}  </li>
<li class="list-group-item"> {{$message->email}}  </li>
<li class="list-group-item"> {{$message->message}}  </li>
	</ul>

@endforeach
@endif

@endsection

@section('sidebar')

@parent
<p>this is an appended one</p>
@endsection