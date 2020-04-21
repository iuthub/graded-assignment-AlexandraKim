<li>

    <div class="action">
    	<form action="{{ route('markAsDone') }}" method="post">
			@csrf
			<input type="text" name="id" hidden value="{{ $id }}" />
			<button type="submit">
				@if ($ticked == '1')
	    			<i class="far fa-square"></i>
	    		@else
					<i class="far fa-check-square"></i>
				@endif
			</button>
	    </form>
    </div>
    <div class="task">
        {{ $title }}
    </div>
    <div class="action">
        <a href="{{ route('editTaskView', ['id' => $id]) }}"><i class="fa fa-edit"></i></a>
    </div>
    <div class="action">
        <a href="{{ route('getDeleteTask', ['id' => $id]) }}"><i class="fa fa-trash-alt"></i></a> 
    </div>
</li>