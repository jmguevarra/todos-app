@extends('layouts.app')
  

@section('page-title')
  Single Todo: {{ $todo->name }}
@endsection

@section('content')
<div class="main-content">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    {{ $todo->name }}
                </div>
                <div class="card-body">
                    <div class="meta-todo mb-3">
                        <span class="date-created">
                            Date Created: 
                            {{ $todo->created_at }}
                        </span><br>
                        <span class="completion">
                            Completion: 
                            @if ( $todo->completed == 0)
                                Not Completed
                            @else
                                Completed
                            @endif
                        </span>
                    </div>
                    <div class="todo-content">
                        {{ $todo->description }}
                    </div>
                </div>
            </div>
            <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info mt-2">Edit</a>
            <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger mt-2">Delete</a>
        </div>
    </div>
</div>
@endsection