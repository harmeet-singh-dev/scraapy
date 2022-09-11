@include('admin.content.header')
@include('admin.content.nav')
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4>All Scrap type</h4>
                    <a href="{{ URL::to('admin/add-scrap-type') }}"><h4>Add Scrap type</h4> </a>
                </div>
            </div>
          
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">All Scrap type</h4>
                        
                        <div class="table-responsive">
                            <table class="table table-editable table-nowrap align-middle table-edits">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Scrap type Name</th>
                                        <th>Price</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <?php $counter = 0; ?>
                                @foreach ($categories as $categories)
                                <tbody>
                                    <tr data-id="1">
                                    <?php $counter++; ?>
                                        <td data-field="id" style="width: 80px">{{$counter}}</td>
                                        <td data-field="name">{{$categories->scrap_type}}</td>
                                        <td data-field="name">{{$categories->price}}</td>
                                        <td style="width: 100px">
                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                                @endforeach
                                </table>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

@include('admin.content.footer')