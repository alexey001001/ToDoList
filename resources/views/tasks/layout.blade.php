<?php
	use App\Task;
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>ToDoList</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	</head>
	<body>
		<div id="todolist_wrapper">
			@yield('todolist_wrapper_header')
			<hr>
			@yield('content')
		</div>
		<script src="{{ asset('js/app.js') }}"></script> 
	</body>
</html>