<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link media="print" href="{{ url('/printer.css')}}" type="text/css">
    <link media="screen" rel="stylesheet" href="{{ url('/style.css')}}"/>
</head>
<body>

<div class="container">
    <header>
        <h1> TASK list</h1>
    </header>
</div>

<div class="container">
    <div class="row">
        <div class="list-group col-sm-3 col-xs-12">

            <a href="{{ url('/')}}" class="list-group-item">
                <h5 class="list-group-item-heading"> View Task</h5>
            </a>

            <a href="{{ url('create/task')}}" class="list-group-item">
                <h5 class="list-group-item-heading"> Create Task</h5>
            </a>

        </div><!--end of list-group-->

        @yield('content')

    </div><!--end of row-->
</div>

</body>
</html>