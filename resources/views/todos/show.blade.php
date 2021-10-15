<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <header class="main-header py-3">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="font-weight-bold">Todo Page</h1>
            </div>
        </div>
    </header>

    <div class="main-content">
        <div class="container">
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
                </div>
            </div>
        </div>
    </div>

</body>
</html>