@include('admin.content.header')
@include('admin.content.nav')
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4>Add Scrap Category</h4>
                    <a href="{{ URL::to('admin/view-category') }}"><h4>View Category</h4> </a>   
                </div>
            </div>
           
        <!-- end page title -->

       
        @include('en.flash-message')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Scrap Category</h4>
                       
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="mt-4">
                                   
                                <form method="POST" action="{{ url('admin/add-scrap-category-pro') }}">
            @csrf	
                                        <div class="mb-3">
                                            <label class="form-label" for="formrow-firstname-input">Category</label>
                                            <input type="text" class="form-control" name="category" id="formrow-firstname-input">
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