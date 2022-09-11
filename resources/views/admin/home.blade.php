@include('admin.content.header')
@include('admin.content.nav')
<div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="page-title-box">
                                    <h4>Dashboard</h4>
                                      
                                </div>
                            </div>
                            
                        </div>
                        <!-- end page title -->

                        <div class="row">
                       
                            <div class="col-xl-3 col-sm-6">
                            <a href="{{ URL::to('admin/ind-users') }}">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-cube-outline float-end"></i>
                                        </div>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mb-3 font-size-16 text-white">Total Individual Users</h6>
                                            <h2 class="mb-4 text-white">{{$users['ind']}}</h2>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            
                            <div class="col-xl-3 col-sm-6">
                            <a href="{{ URL::to('admin/industrial-users') }}">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-buffer float-end"></i>
                                        </div>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mb-3 font-size-16 text-white">Total Industrial Users</h6>
                                            <h2 class="mb-4 text-white">{{$users['industrial']}}</h2>
                                            </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                            <a href="{{ URL::to('admin/global-users') }}">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-tag-text-outline float-end"></i>
                                        </div>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mb-3 font-size-16 text-white">Total Global Users</h6>
                                            <h2 class="mb-4 text-white">{{$users['global']}}</h2>
                                            </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                            <a href="{{ URL::to('admin/vendor-users') }}">
                                <div class="card mini-stat bg-primary">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-briefcase-check float-end"></i>
                                        </div>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mb-3 font-size-16 text-white">Total Vendor Users</h6>
                                            <h2 class="mb-4 text-white">{{$users['vendor']}}</h2>
                                            </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- container-fluid -->
                </div>
                @include('admin.content.footer')