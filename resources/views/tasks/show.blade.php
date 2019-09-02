@extends('tasks.layout')

@section('content')
	<h3>Task description:</h3>
	<p>{{ $tsks->description }}</p>

	<h5>Created:</h5>
	<p>{{ $tsks->created_at }}</p>

	<h5>Updated:</h5>
	<p>{{ $tsks->updated_at }}</p>
@stop

@section('todolist_wrapper_header')
	<div class="todolist_wrapper_header">
		<h1>ToDoList <sub>v1.0</sub></h1>
	</div>
@stop