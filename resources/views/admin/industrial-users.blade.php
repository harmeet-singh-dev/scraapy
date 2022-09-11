@include('admin.content.header')
@include('admin.content.nav')
<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4>All Industrial Users</h4>
                      
                </div>
            </div>
          
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">All Industrial Users Data</h4>
                        
                        <div class="table-responsive">
                            <table class="table table-editable table-nowrap align-middle table-edits">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <?php $counter = 0; ?>
                                @foreach ($users as $user)
                                <tbody>
                                    <tr data-id="1">
                                    <?php $counter++; ?>
                                        <td data-field="id" style="width: 80px">{{$counter}}</td>
                                        <td data-field="name">{{$user->first_name}}</td>
                                        <td data-field="email">{{$user->email}}</td>
                                        <td data-field="mobile">{{$user->mobile}}</td>
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