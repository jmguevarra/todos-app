<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller //<-- extends Controller Class
{
    public function index(){

        return view('todos.index')->with('todos', Todo::all());
    }

    public function successFlash($message = ''){
        session()->flash('success', $message);
    }

    public function show(Todo $todo){
        return view('todos.show')->with('todo', $todo);
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

        $this->successFlash('New todo task has been added successfully');
        return redirect('/todos');
    }

    public function editTodo(Todo $todo){

        return view('todos.edit')->with('todo', $todo);
    }

    public function updateTodo(Todo $todo){
        $this->validate(request(), 
            [
                'name' => 'required|min:6', 
                'description' => 'required'
            ]
        );

        $data = request()->all();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        $this->successFlash('Todo updated successfully');
        return redirect('/todos');

    }

    public function deleteTodo(Todo $todo){
        $todo->delete();
        $this->successFlash('Todo deleted successfully');
        return redirect('/todos');
    }

    public function completeTodo(Todo $todo){
        $todo->completed = true;
        $todo->save();

        $this->successFlash('One task has been completed');
        return redirect('/todos');
    }

}
