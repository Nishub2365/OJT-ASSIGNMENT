<h2>Edit Task</h2>

<form method="POST" action="/tasks/{{ $task->id }}">
@csrf
@method('PUT')

<input name="title" value="{{ $task->title }}">
<br>

<textarea name="description">{{ $task->description }}</textarea>
<br>

<button type="submit">Update</button>

</form>