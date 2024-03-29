<!doctype HTML>

<head>
        <title>@yield('title', 'The page who shall not be named')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>


<body>

@include('nav')

@if(session()->has('message'))
<div class="alert alert-success" role="alert">
        {{session()->get('message')}}
</div>
@endif

<div>
    @yield('content')
</div>
</body>
