@extends('layouts.app')

@section('content')
    <section class="create-todos">
        <h1 class="text-center">Create Todos</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                        Create new todo
                    </div>
                    <div class="card-body">

                        @if($errors->any())
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form class="todos-form create" action="/save-todos" method="POST">
                            @csrf
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" id="name" placeholder="Todo Name">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="description" id="description" cols="5" rows="5" placeholder="Tell me about your todo..."></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-success">Create Todo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>  
@endsection