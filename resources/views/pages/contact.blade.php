@extends('layouts.app')

@section('content')
	<h1>Contact page</h1>
	<p>My name is: {{$name}} </p>
	<ul>
		<p>My peoples are:</p>
		@foreach($people as $person)
			<li>{{$person}}</li>
		@endforeach
		
	</ul>
@endsection