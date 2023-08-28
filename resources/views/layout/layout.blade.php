<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>
            @yield('title')::{{config('app.name')}}
        </title>
        @include('layout.partials.head')
    </head>
    <body>
        <div id="app">
            <div id="wrapper" class="">
                <!-- @include('layout.partials.navbar') -->
                @include('layout.partials.sidebar')
                <div class="content-layout">
                    <div class="content">
                        <div class="container-fluid">
                            @yield('content')
                        </div>
                    </div>
                    <!-- @include('layout.partials.footer') -->
                </div>
            </div>
        </div>
        @include('layout.partials.scripts')
    </body>
</html>
