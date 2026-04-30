<h2>All Tasks</h2>

<a href="/tasks/create">Add Task</a>

@foreach($tasks as $task)
    <p>{{ $task->title }}</p>

    <a href="/tasks/{{ $task->id }}/edit">Edit</a>

    <form method="POST" action="/tasks/{{ $task->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
