namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required'
        ]);

        Task::create($request->all());
        return redirect('/tasks');

      
]);
    }

   public function edit($id) {
    $task = Task::find($id);
    return view('tasks.edit', compact('task'));
}

public function update(Request $request, $id) {
    $task = Task::find($id);
    $task->update($request->all());
    return redirect('/tasks');
}

public function destroy($id) {
    Task::destroy($id);
    return redirect('/tasks');
}
}