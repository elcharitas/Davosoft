@include('templates.meta')
@include('templates.header')
                <div class="row">
                    <div class="col-md-8">
                        @yield('content')
                    </div>
                    
                    <div class="col-md-4">
                        @stack('sidebar')
                    </div>
                </div>
@include('templates.footer')