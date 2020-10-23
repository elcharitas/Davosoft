<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> {{ __('admin.title', ['title' => 'Auth']) }} </title>
    
        <link rel="shortcut icon" href="/assets/media/image/favicon.png"/>
        
        <link rel="stylesheet" href="/vendors/bundle.css" type="text/css">

        <link rel="stylesheet" href="/assets/css/app.min.css" type="text/css">
    </head>
    <body class="form-membership">
        
        <div class="preloader">
            <div class="preloader-icon"></div>
        </div>
        
        <div class="form-wrapper">
            <form action="{{ route('adminauth') }}" method="post" class="mt-auto">
                @csrf
                <div class="form-group">
                    <input name="shp_id" type="text" class="form-control" placeholder="Username or email" value="{{ old('shp_id') }}" required autofocus>
                </div>
                <div class="form-group">
                    <input name="shp_key" type="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group d-flex justify-content-between">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                    </div>
                    <a href="">Reset password</a>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                <hr>
                @yield('copyright')
            </form>
            
        
        
        </div>
        
        <script src="/vendors/bundle.js"></script>
        <script src="/assets/js/app.min.js"></script>
    </body>
</html>
