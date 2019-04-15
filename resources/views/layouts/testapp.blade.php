<!DOCTYPE html>
<html>
    <head>
    <title>@yield('title')</title>  
    </head>
    <style>
        .header{ font-size: 30pt; background-color:blue;}
        h1{ font-size: 20pt;}
        .content{ background-color:red; }
        .footer { background-color:gray; }
    </style>
    <body>
        <div class="header">
        @yield('header')  
        </div>

        <h1>@yield('title')</h1>
        
        <div class="content">
        @yield('content')  
        </div>
    
        <div class="footer">
        @yield('footer') 
        </div>

    </body>
</html>