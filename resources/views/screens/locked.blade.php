@include('templates.meta')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> {{ __('admin.title', ['title' => __('auth.unlock')]) }} </title>
    
        <link rel="shortcut icon" href="/assets/media/image/favicon.png"/>
        
        <link rel="stylesheet" href="/vendors/bundle.css" type="text/css">

        <link rel="stylesheet" href="/assets/css/app.min.css" type="text/css">
    </head>
    <body class="form-membership">
        <div class="preloader">
            <div class="preloader-icon"></div>
        </div>
        
        <div class="form-wrapper">
        
            <div id="logo">
                <img class="logo rounded circle" src="/assets/media/image/user/women_avatar1.jpg" width="100" alt="image">
            </div>
        
            <b class="d-block mb-3 text-uppercase"> Enter password to Unlock!</b>
        
            <form action="{{ route('adminunlock') }}" method="post">
                @csrf
                <div class="form-group">
                    <input name="shp_key" type="password" class="form-control" placeholder="Password" required autofocus>
                </div>
                <button type="submit" class="btn btn-success btn-block"> {{ __('auth.unlock') }} </button>
                <a href="{{ route('adminlogout') }}" class="btn btn-block btn-primary"> Sign Out</a>
                <hr>
                @yield('copyright')
            </form>
        </div>
        
        <script src="/vendors/bundle.js"></script>
        <script src="/assets/js/app.min.js"></script>
    </body>
</html>