                    <br/>
                    <div class="fixed-bottom d-md-none">
                        <div class="card container quick-nav" style="display: none">
                            <div class="justify-content-center">
                                <div class="row">

                                    <div class="col">
                                        <a class="btn btn-rounded btn-default" href="#">
                                            <i class="fa fa-apple cds"></i>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="btn btn-rounded btn-default" href="#">
                                            <i class="fa fa-windows cds"></i>
                                        </a>
                                    </div>

                                    <div class="col">
                                        <a class="btn btn-rounded btn-default active" href="#">
                                            <i class="fa fa-home cds"></i>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="btn btn-rounded btn-default" href="#">
                                            <i class="fa fa-linux cds"></i>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="btn btn-rounded btn-default" href="#">
                                            <i class="fa fa-gamepad cds"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <footer class="content-footer">
                        @yield('copyright')
                        <div>
                            <nav class="nav">
                                <a href="#" class="nav-link">Licenses</a>
                                <a href="#" class="nav-link">Change Log</a>
                                <a href="#" class="nav-link">Get Help</a>
                            </nav>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        
        <script src="/vendors/bundle.js"></script>
        
        <script src="/assets/js/app.min.js"></script>
        
        @stack('scripts_footer')
    </body>
</html>