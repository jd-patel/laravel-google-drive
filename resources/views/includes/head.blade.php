<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" href="{{ env('APP_FAVICON') }}">
<title>@hasSection('htmlheader_title')@yield('htmlheader_title')@endif</title>
{{-- <h2>Head Section</h2> --}}

<!-- Styles -->
<link href="{{ asset("/css/app.css") }}" rel="stylesheet">

@stack('styles')
<div class="container">