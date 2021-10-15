<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <header class="main-header py-3">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="font-weight-bold">Todos Page</h1>
            </div>
        </div>
    </header>

    <div class="main-header py-3">
        <div class="container">
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
                                        <button class="btn btn-primary btn-sm">View</button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>