@extends('layouts.app')

@section('page-title')
    Todo App: Editing Todos
@endsection

@section('content')
    <section class="edit-todos">
        <h1 class="text-center">Edit Todos</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        Edit todo
                    </div>
                    <div class="card-body">

                        @if($errors->any())
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form class="todos-form edit" action="/todos/{{ $todo->id }}/update-todos" method="POST">
                            @csrf
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" id="name" placeholder="Todo Name" value="{{ $todo->name }}">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="description" id="description" cols="5" rows="5" placeholder="Tell me about your todo...">{{ $todo->description }}</textarea>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-success">Edit Todo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>  
@endsection