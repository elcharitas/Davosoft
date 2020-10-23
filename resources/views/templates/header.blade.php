<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ __('app.title', ['title' => $title ?? 'Home']) }}</title>
        @stack('meta_header')
        <link rel="shortcut icon" href="/assets/media/image/favicon.png"/>

        <link rel="stylesheet" href="/vendors/bundle.css" type="text/css">
    
        <link rel="stylesheet" href="/vendors/range-slider/css/ion.rangeSlider.min.css" type="text/css">
    
        <link rel="stylesheet" href="/assets/css/app.min.css" type="text/css">
        @stack('styles_header')
    </head>
    <body class="small-navigation">
        
        <div class="preloader">
            <div class="preloader-icon"></div>
        </div>
        
        <div class="layout-wrapper">
            <div class="header d-print-none">
                <div class="header-left">
                    <div class="navigation-toggler">
                        <a href="#" data-action="navigation-toggler">
                            <i data-feather="menu" class="text-white"></i>
                        </a>
                    </div>
                </div>
                <div class="header-right mx-auto">
                    <div class="py-auto ml-n5">
                        <a href="{{ url('/') }}">
                            Davosoft
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="content-wrapper">
                <div class="navigation">
                    <div class="navigation-menu-body text-center">
                        
                        <div class="">
                            Hello
                        </div>
                        
                        <div class="mt-auto"></div>
                        
                        <div class="p-15 bg-white justify-content-between">
                            <button class="btn btn-dark btn-block mb-4 mode text-capitalize">
                                Switch to dark Mode
                            </button>
                            <hr class="mt-auto"/>
                            @yield('copyright')
                        </div>
                    </div>
                </div>
                
                <div class="content-body">
                    <div class="content">
                    @include('templates.breadcrumbs')