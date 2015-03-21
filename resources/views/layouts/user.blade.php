<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('http://fonts.googleapis.com/css?family=Crimson+Text') }}" rel='stylesheet' type='text/css'>
	
</head>
<body>
	
    <div class="container">
        @include('users.header')
        @if(Session::has('flash_message'))
        
        <div class="alert alert-success">
            {{Session::get('flash_message')}}
        </div>
        
        @endif
        
        @yield('content')
        
         @include('users.footer')
    </div>
	
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>