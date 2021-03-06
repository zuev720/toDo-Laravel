<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $tasks = ToDo::all()->where('user_id', '=', Auth::user()->id)->toArray();
        return view('toDo.toDoList',['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @param ToDo $todo
     * @return RedirectResponse
     */
    public function create(Request $request, ToDo $todo): RedirectResponse
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $todo::create([
            'title' => $title,
            'description' => $description,
            'user_id' => Auth::user()->id,
            'created_at' => now(),
        ]);
        return redirect()->route('showTasks');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $task = ToDo::find($id)->toArray();
        return view('toDo.toDo', ['task' => $task]);
    }
}
