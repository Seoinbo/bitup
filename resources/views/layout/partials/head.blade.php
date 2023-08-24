<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="A tool for upbit trading" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<!-- App favicon -->
<link rel="shortcut icon" href="{{asset('/favicon.ico')}}">

<!-- App css -->
@vite('resources/css/app.css')
@stack('head_links')

@vite('resources/js/app.js')

@stack('head_scripts')
