@extends('templates.sidebar')

@php
    $route = Str::of(Route::currentRouteName());
@endphp

@push('meta_header')
<meta name="">
@endpush