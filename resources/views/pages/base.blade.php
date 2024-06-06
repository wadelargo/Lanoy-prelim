<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>base</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            margin: 5%;
        }


    </style>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <h1>Laravel Demo</h1>


        <ul class="nav justify-content-end float-right nav-pills">
                <li class="nav-item">
                    <a class="nav-link {{Route::is('home') ? 'active' : ''}}" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Route::is('categories') ? 'active' : ''}}" href="{{url('/categories')}}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{Route::is('units') ? 'active' : ''}}" href="{{url('/units')}}">Units</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/merchandises')}}" >Merchandises</a>
                </li>
            </ul>
    </nav>

    <div class="container mt-5" >
        @yield('content')
    </div>
</body>
</html>