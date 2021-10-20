<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller //<-- extends Controller Class
{
    public function index(){

        return view('todos.index')->with('todos', Todo::all());
    }

    public function show($todoId){

        return view('todos.show')->with('todo', Todo::find($todoId));
    }

    public function create(){
        return view('todos.create');
    }

    public function saveTodo(){
        
        $this->validate(request(), 
            [
                'name' => 'required|min:6', 
                'description' => 'required'
            ]
        );

        $data = request()->all();

        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save();

        return redirect('/todos');
    }

    public function editTodo($todoId){

        $todo = Todo::find($todoId);
        return view('todos.edit')->with('todo', $todo);
    }

    public function updateTodo($todoId){
        $this->validate(request(), 
            [
                'name' => 'required|min:6', 
                'description' => 'required'
            ]
        );

        $data = request()->all();
        $todo = Todo::find($todoId);

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        return redirect('/todos');

    }

    public function deleteTodo($todoId){
        $todo = TODO::find($todoId);
        $todo->delete();
        return redirect('/todos');
    }
}
