<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @hasSection('page-title')
            @yield('page-title')
        @else 
            Todo App
        @endif
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
<body>
    <div class="container">
        @include('includes.header') 
        
        @if( session()->has('success') )
            <div class="alert alert-success">
                {{ session()->get('success') }}
                <script>
                    setTimeout(function(){
                        let alertElem = document.querySelector('.alert.alert-success');
                        alertElem.classList.add('hide');
                    }, 3000);
                </script>
            </div>
        @endif

        @yield('content') 
    </div>
</body>
</html>