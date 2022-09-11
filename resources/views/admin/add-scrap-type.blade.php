@include('admin.content.header')
@include('admin.content.nav')
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4>Add Scrap Type</h4>
                    <a href="{{ URL::to('admin/view-scraptype') }}"><h4>View Scrap Type</h4> </a>   
                </div>
            </div>
           
        <!-- end page title -->

       
        @include('en.flash-message')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Scrap Type</h4>
                       
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="mt-4">
                                   
                                <form method="POST" action="{{ url('admin/add-scrap-type-pro') }}">
            @csrf	
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-firstname-input">Scrap Type</label>
                                            <input type="text" class="form-control" name="name" id="formrow-firstname-input">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-firstname-input">Price in $</label>
                                            <input type="text" class="form-control" name="price" id="formrow-firstname-input">
                                        </div>

                                       <div class="mt-4">
                                            <button type="submit" class="btn btn-primary w-md">Add</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        
                        </div>

                     
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Layout -->

       

        

        



    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@include('admin.content.footer')