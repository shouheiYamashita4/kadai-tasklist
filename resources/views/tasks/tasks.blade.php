@if (count($tasks) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
                <!--<th>id</th>-->
                <th>Status</th>
                <th>Task</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <!--<td>{!! link_to_route('tasks.show', 'id', ['id' => $task->id]) !!}</td>-->
                <td>{{ $task->status }}</td>
                <td>{{ $task->content }}</td>
                <td>{!! link_to_route('tasks.show', 'Edit', ['id' => $task->id]) !!}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endif

{!! link_to_route('tasks.create', 'Add new task', [], ['class' => 'btn btn-primary']) !!}