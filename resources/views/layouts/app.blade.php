<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>tasklist</title>
    </head>

    <body>
        @yield('content')
        @include('commons.navbar')
        
        <div class="container">
            @include('commons.error_messages')
            
            @yield('content')
        </div>
    </body>
</html>