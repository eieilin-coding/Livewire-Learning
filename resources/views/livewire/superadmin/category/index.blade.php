 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('title')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">@yield('title')</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>
                                <button class="btn btn-sm bg-primary"><i class="fas fa-plus mr-2"></i>Create Data</button>
                            </div>
                                <div class="btn-group dropleft">
                                    <button type="button" class="btn btn-sm btn-warning dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-print mr-1"></i>Print
                                    </button>
                                    <div class="dropdown-menu ">
                                        <a href="#" class="dropdown-item text-success"><i class="fas fa-file-excel mr-1"></i>Excel</a>
                                        <a href="#" class="dropdown-item text-danger"><i class="fas fa-file-pdf mr-1"></i>Pdf</a>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                    <div class="card-body">
                        Category content
                    </div>
                   
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>