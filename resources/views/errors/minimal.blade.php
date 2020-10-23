<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> @yield('title') </title>
    
        <!-- Favicon -->
        <link rel="shortcut icon" href="/assets/media/image/favicon.png"/>
    
        <!-- Plugin styles -->
        <link rel="stylesheet" href="/vendors/bundle.css" type="text/css">
    
        <!-- App styles -->
        <link rel="stylesheet" href="/assets/css/app.min.css" type="text/css">
    </head>
    <body class="error-page bg-white">
        
        <div>
            <h4 class="mb-0 text-muted font-weight-normal"> @yield('message') </h4>
            <div>
                <span class="error-page-item text-warning font-weight-bold">@yield('code')</span>
            </div>
            <a href="{{ url('/') }}" class="btn btn-outline-warning">Explore New Apps</a>
        </div>
    </body>
</html>
