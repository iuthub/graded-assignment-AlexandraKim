@extends('layouts.welcome')

@section('content')

<ul id="tasks">
  @foreach($tasks as $task)
    @component('taskItem')
      @slot('title')
        {{ $task['title'] }}
      @endslot
      @slot('id')
        {{ $task['id'] }}
      @endslot
      @slot('ticked')
        {{ $task['ticked'] }}
      @endslot
    @endcomponent
  @endforeach
</ul>
@endsection
