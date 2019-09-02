@extends('tasks.layout')

@section('content')
	<section class="tasks_wrapper">
		@foreach ($tsks as $ts)
			<article class="tasks">
				<input 
					class="task_input" 
					placeholder="Input task" 
					name="task" 
					id="{{ $ts->id }}" 
					value="{{ $ts->description }}"
					rows="1">
					<div class="controls">
						<a href="{{ route('tasks.show', $ts->id) }}" class="show_task">Show!</a>
						<span class="drop_task">Delete</span>
					</div>
			</article>
		@endforeach
	</section>
@stop

@section('todolist_wrapper_header')
	<div class="todolist_wrapper_header">
		<h1>ToDoList <sub>v1.0</sub></h1>
		<div class="add_task">
			<h3>Add task</h3>
			<svg class="add_task_icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
		</div>
	</div>
@stop

