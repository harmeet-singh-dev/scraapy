<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Register | Lexa - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin/images/favicon.ico')}}"> 
        
        <!-- Bootstrap Css -->
        <link href="{{asset('admin/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('admin/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="card-body pt-0">
                                <h3 class="text-center mt-5 mb-4">
                                    <a href="index.html" class="d-block auth-logo">
                                        <img src="{{asset('admin/images/logo-dark.png')}}" alt="" height="30" class="auth-logo-dark">
                                        <img src="{{asset('admin/images/logo-light.png')}}" alt="" height="30" class="auth-logo-light">
                                    </a>
                                </h3>
                                <div class="p-3">
                                    <h4 class="text-muted font-size-18 mb-1 text-center">Free Register</h4>
                                    <p class="text-muted text-center">Get your free Lexa account now.</p>
                                   
                                    <form method="POST" class="form-horizontal mt-4" action="{{ url('admin_register') }}">
                            @csrf
                                        <div class="mb-3">
                                            <label for="useremail">Email</label>
                                            <input type="email" class="form-control" required name="email" placeholder="Enter email">
                                        </div>

                                         <div class="mb-3">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" required name="password" placeholder="Enter password">
                                        </div>

                                        <div class="mb-3 row mt-4">
                                            <div class="col-12 text-end">
                                            <x-button type="submit" class="btn btn-primary w-md waves-effect waves-light" class="login_btn">Register</x-button>
							
                                                 </div>
                                        </div>

                                        <div class="mb-0 row">
                                            <div class="col-12 mt-4">
                                                <p class="text-muted mb-0 font-size-14">By registering you agree to the Lexa <a href="#" class="text-primary">Terms of Use</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <p>Already have an account ? <a href="pages-login.html" class="text-primary"> Login </a> </p>
                            © <script>document.write(new Date().getFullYear())</script> Lexa <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('admin/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('admin/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('admin/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('admin/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('admin/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <!-- App js -->
        <script src="{{asset('admin/js/app.js')}}"></script>
    </body>

</html>