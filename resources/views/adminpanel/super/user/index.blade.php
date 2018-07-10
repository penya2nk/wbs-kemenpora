@extends('adminpanel.layout.template', ['title_bread'=>'User Management','child_bread'=>['User Management'=>'#']])

@section('bread-title')
    User Management
@endsection

@section('bread-list')    
    <li><strong>User Management</strong></li>
@endsection

<!-- Main Container -->

@section('content')

    @include('adminpanel.contents.modal')
    
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><span class="text-navy">Daftar User</span></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>                                                                                            
                            </div>
                        </div>
                        <div class="ibox-content">
                            
                            <div class="row">
                            <div class="col-sm-12" style="padding-right: 40px;padding-left: 40px;">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <a class="btn btn-primary btn-md" href="{{ route('super.user-add') }}">Tambah User</a><br><br>
                                    </div>
                                </div>

                                <div class="row">                        

                                        <div class="col-sm-12">

                                            <table class="table table-striped table-bordered table-hover dataTables-example dataTable dtr-inline" id="data-user" width="100%">
                                                <thead>
                                                <tr>                     
                                                    <th>Nama Lengkap</th>
                                                    <th>Email</th>
                                                    <th>Alamat</th>                
                                                    <th>No. Telepon</th>
                                                    <th>No. Handphone</th>
                                                    <th>No. KTP</th>
                                                    <th>Role</th>
                                                    <th>Edit | Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($user as $u)
                                                    <tr>
                                                        <td>{{ $u->fullname }}</td>
                                                        <td>{{ $u->email }}</td>
                                                        <td>{{ $u->address }}</td>
                                                        <td>{{ $u->phoneNumber }}</td>
                                                        <td>{{ $u->handphoneNumber }}</td>
                                                        <td>{{ $u->identityNumber }}</td>
                                                        <td>{{ $u->role->role }}</td>
                                                        <td><a href="{{ route('super.user-edit', ['id'=>$u->id])  }}">Edit</a> | <a href="#" data-href="{{ route('super.user-delete', ['id'=>$u->id]) }}" data-toggle="modal" data-target="#confirm-delete">Delete</a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                        </div>

                                    </div>



                            </div>
                            </div>
                            <br>
                            <br>

                        </div>
                    </div>
                </div>
        </div>
    </div>


@endsection

@push('ad-js')
<script type="text/javascript">
    $(document).ready(function() {

        $.fn.dataTable.ext.errMode = 'throw';
        $("#data-user").DataTable({
            "columnDefs": [
                { "orderable": false, "targets": 7 }
            ]
        });

    });
</script>
@endpush


