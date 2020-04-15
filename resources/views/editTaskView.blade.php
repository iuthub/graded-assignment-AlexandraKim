@extends('welcome')

@section('content')

<form action="{{ route('postEditTask') }}" method="post" id="taskForm">
	@csrf
    <div class="header edit">
      <h2>Edit</h2>
      <input type="text" name="title" value="{{ $task['title'] }}">
      <input type="text" name="id" hidden value="{{ $task['id'] }}" />
      <button type="submit" class="addBtn">Save</button>
    </div>
</form>

@endsection