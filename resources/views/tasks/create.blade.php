<h2>Add Task</h2>

<form method="POST" action="/tasks">
@csrf

<input name="title" placeholder="Title">
<br>

<textarea name="description"></textarea>
<br>

<button type="submit">Save</button>

</form>

@error('title')
<p>{{ $message }}</p>
@enderror