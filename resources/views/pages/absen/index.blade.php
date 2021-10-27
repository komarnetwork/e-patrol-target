@extends('layouts.backend')

@section('css_before')
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5-responsive/css/responsive.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5-responsive/css/responsive.bootstrap5.min.css') }}">
@endsection

@section('js_after')
<!-- jQuery (required for DataTables plugin) -->
<script src="{{ asset('js/lib/jquery.min.js') }}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<!-- <script src="{{ asset('js/plugins/datatables-bs5-responsive/js/responsive.dataTables.min.js') }}"></script> -->
<script src="{{ asset('js/plugins/datatables-bs5-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-bs5-responsive/js/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('js/pages/tables_datatables.js') }}"></script>
@endsection

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Data Absen</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Data Presensi</li>
                    <li class="breadcrumb-item active" aria-current="page">list</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">

    <!-- Dynamic Table with Export Buttons -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Data Absen</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="col-md-6">
                <!-- Pop Out -->
                <button type="button" class="btn btn-primary push" data-bs-toggle="modal" data-bs-target="#modal-block-popout"><i class="fa fa-plus"></i> Add User</button>
                <!-- END Pop Out -->
            </div>

            <!-- Pop Out Block Modal -->
            <div class="modal fade" id="modal-block-popout" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout" aria-hidden="true">
                <div class="modal-dialog modal-dialog-popout" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded block-themed block-transparent mb-0">

                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">User Add</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Content Modal -->
                            <div class="block-content">
                                <form action="/pages/userlist/store" method="post">
                                    @csrf
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" autofocus required>
                                        <label class="form-label" for="name">Name</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
                                        <label class="form-label" for="username">Username</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                                        <label class="form-label" for="email">Email address</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <select class="form-select" id="is_admin" name="is_admin" aria-label="Floating label select example">
                                            <option selected>Select an option</option>
                                            <option value="1">Admin</option>
                                            <option value="0">User</option>
                                        </select>
                                        <label class="form-label" for="is_admin">Is Admin</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="name@example.com">
                                        <label class="form-label" for="password">password</label>
                                    </div>

                                    <div class="block-content block-content-full text-end bg-body">
                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-sm btn-primary" onclick="" data-bs-dismiss="modal">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter responsive js-dataTable-buttons">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5px;">No</th>
                        <th style="width: 30%;">Name</th>
                        <th style="width: 35%;">Datang</th>
                        <th class="d-md-table-cell" style="width: 35%;">Pulang</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($absens as $item)
                    <tr>
                        <td class="text-center" style="width: 5px;">{{ $loop->iteration }}</td>
                        <td class="font-w600">
                            {{ $item->author->name }}
                        </td>
                        <td class="font-w600">
                            {{ date('F d, Y', strtotime($item->datang)) }} at {{ date('g:ia', strtotime($item->datang)) }}
                        </td>
                        <td style="width: 35px;">
                            @if ($item->pulang)
                            {{ date('F d, Y', strtotime($item->pulang)) }} at {{ date('g:ia', strtotime($item->pulang)) }}
                            @else
                            <p>User Belum Absen Pulang</p>
                            @endif
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->
</div>
<!-- END Page Content -->
@section('js_after')
<script type="text/javascript">

</script>
@endsection

@endsection
