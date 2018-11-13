<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Project-One')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
        <style>
            .is-complete {
                text-decoration: line-through;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul> 
        
        @yield('content')
        </div>
    </body>
</html>