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
                {{-- <div class="card">
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

                 <div class="mb-3 d-flex justify-content-between">
                     <div class="col-2">
                         <select wire:model.live="paginate" class="form-control">
                             <option value="10">10</option>
                             <option value="20">20</option>
                             <option value="25">25</option>
                             <option value="30">30</option>
                         </select>
                     </div>
                     <div class="col-6">
                         <input wire:model.live='search' type="text" class="form-control" placeholder="Search..">
                     </div>
                 </div>
                 <div class="table-responsive">
                     <table class="table table-hover">
                         <thead>
                             <tr>
                                 <th>No</th>
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Role</th>
                                 <th><i class="fas fa-cog"></i></th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($user as $index => $item)
                                 <tr>
                                     <td>{{ $index+1 }}</td>
                                     <td>{{ $item->name }}</td>
                                     <td>{{ $item->email }}</td>
                                     @if ($item->role == 'Super Admin')
                                         <td><span class="badge badge-info">{{ $item->role }}</span></td>
                                     @elseif($item->role == 'Admin')
                                         <td><span class="badge badge-success">{{ $item->role }}</span></td>
                                     @endif

                                     <td><button wire:click="edit({{ $item->id }})" class="btn btn-sm bg-warning"
                                             data-toggle="modal" data-target="#editModal">
                                             <i class="fas fa-edit"></i></button>
                                         <button wire:click="confirm({{ $item->id }})" class="btn btn-sm bg-danger"
                                             data-toggle="modal" data-target="#deleteModal">
                                             <i class="fas fa-trash"></i></button>
                                     </td>
                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                     <div>{{ $user->links() }}</div>
                 </div>
             </div> --}}
                   
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>