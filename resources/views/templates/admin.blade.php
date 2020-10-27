@include('templates.meta')
@push('meta_header')
        <meta name="robots" content="noindex, nofollow"/>
@endpush
@include('templates.header_admin')
    @yield('content')
@include('templates.footer')