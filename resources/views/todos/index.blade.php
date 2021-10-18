@extends('layouts.app')
  

@section('page-title')
    Todos List
@endsection

@section('content')
<div class="todos-section py-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    Todos
                </div>
                <div class="card-body">
                    <div class="todos-lists list-group">
                        @foreach($todos as $todo)
                            <div class="todo-list list-group-item d-flex justify-content-between">
                                <div class="todo-name">{{ $todo->name }}</div>
                                <a href="todos/{{ $todo->id }}" class="btn btn-primary btn-sm">View</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
