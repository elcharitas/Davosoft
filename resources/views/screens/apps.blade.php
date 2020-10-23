    @extends('screens.base')
    @section('content')
                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <div class="card square bg-primary">
                                    <div class="card-body xpad">
                                        <i class="fa fa-bolt"></i> {{ __('New Apps') }}
                                    </div>
                                </div>
                                <div class="card square">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-end mb-3">
                                            <span class="badge badge-primary">Hacking</span>
                                        </div>
                                        <div class="d-lg-flex text-center text-lg-left">
                                            <a href="#" class="mr-3" title="HP Pavilion 15-EC0005NT AMD">
                                                <img width="200" src="/assets/media/image/visualstudiocodelogo.png"
                                                     class="img-fluid" alt="HP Pavilion 15-EC0005NT AMD">
                                            </a>
                                            <div>
                                                <a href="#">
                                                    <h5 class="m-0 mb-2">Visual Studio Code v4.7</h5>
                                                </a>
                                                <div>
                                                    <span class="text-truncate">
                                                        {{ Str::limit('Hello', 50) }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="row">
                                            <div class="col-4">
                                                <div> <i class="fa fa-download text-danger"></i> 213 </div> Downloads
                                            </div>
                                            <div class="col-4">
                                                <div><i class="fa fa-eye text-primary"></i> 500</div> Previews
                                            </div>
                                            <div class="col-4">
                                                <div> 5 Stars (8) </div>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                                <i class="fa fa-star text-warning"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                @include('templates.pagination', ['page' => request()->query('page', 1), 'count' => 3])
                            </div>
                        </div>
    @endsection