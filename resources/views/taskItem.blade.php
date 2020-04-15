<li>
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