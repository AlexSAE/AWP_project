<?php  
@extends('layouts.home')

@section('title')
	Join US
@stop

@section('content')
	{{ Form::open(array('url' => 'users')) }}
	<p>
		{{ Form::label('username', 'Username*') }}
		{{ Form::text('username') }}
	</p>
	<p>
		{{ Form::label('username', 'Username*') }}
		{{ Form::text('username') }}
	</p>
	<p>
		{{ Form::label('username', 'Username*') }}
		{{ Form::text('username') }}
	</p>
	<p>
		{{ Form::label('username', 'Username*') }}
		{{ Form::text('username') }}
	</p>