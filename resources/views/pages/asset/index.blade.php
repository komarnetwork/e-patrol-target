@extends('layouts.backend')

@section('css_before')
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5-responsive/css/responsive.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5-responsive/css/responsive.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Data Asset</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Data Asset</li>
                    <li class="breadcrumb-item active" aria-current="page">list</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Asset List</h3>
        </div>
        <div class="block-content">
            <div class="row py-3">
                <div class="col-md-6">
                    <!-- Pop Out -->
                    <button type="button" class="btn btn-primary push" data-bs-toggle="modal" data-bs-target="#modal-asset"><i class="fa fa-plus"></i> Add Asset</button>
                    <!-- END Pop Out -->
                </div>

                @section('modal')
                <!-- Pop Out Block Modal -->
                <div class="modal fade" id="modal-asset" tabindex="-1" role="dialog" aria-labelledby="modal-asset" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-popout" role="document">
                        <div class="modal-content">
                            <div class="block block-rounded block-themed block-transparent mb-0">
                                <div class="block-header bg-primary-dark">
                                    <h3 class="block-title">Modal Title</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                            <i class="fa fa-fw fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <form action="" method="post" class="js-validation" novalidate>
                                    <div class="block-content">
                                        <div class="form-floating mb-4">
                                            <input type="text" class="form-control @error('nama_asset') is-invalid @enderror" id="nama_asset" name="nama_asset" placeholder="John Doe" autofocus required>
                                            <label class="form-label" for="nama_asset">Nama Asset <span class="text-danger">*</span></label>
                                            @error('nama_asset')
                                            <div class="invalid-feedback">
                                                Please enter a valid email address
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="block-content block-content-full text-end bg-body">
                                        <button type="submit" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endsection

                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter responsive js-dataTable-buttons">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 5px;">No</th>
                            <th style="width: 20%;">Nama Asset</th>
                            <th>Lokasi Check Point</th>
                            <th style="width: 20%;">Deskripsi Tugas</th>
                            <th style="width: 15%;">Jenis Asset</th>
                            <th style="width: 5px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assets as $item)
                        <tr>
                            <td class="text-center" style="width: 5px;">{{ $loop->iteration }}</td>
                            <td class="font-w600">
                                {{ $item->nama_asset }}
                            </td>
                            <td class="font-w600">
                                {{ $item->lokasi_point }}
                            </td>
                            <td>
                                @if ($item->deskripsi)
                                <span class="badge bg-primary">Patroli Wajib</span>
                                @else
                                <span class="badge bg-warning">Patroli Reguler</span>
                                @endif
                            </td>
                            <td>Lampu</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                                        <i class="fa fa-pencil-alt"></i>
                                    </button>
                                    <button type="button" class="js-swal-confirm btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- END SweetAlert2 -->
</div>
<!-- END Page Content -->

@endsection
@section('js_after')
<!-- Page JS Plugins -->
<script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- jQuery (required for DataTables plugin) -->
<script src="{{ asset('js/lib/jquery.min.js') }}"></script>
<script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/plugins/jquery-validation/additional-methods.js') }}"></script>

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
<script src="{{ asset('js/pages/be_forms_validation.min.js') }}"></script>
<script type="text/javascript">
    Dashmix.onLoad(class {
        static sweetAlert2() {
            let e = Swal.mixin({
                buttonsStyling: !1,
                target: "#page-container",
                customClass: {
                    confirmButton: "btn btn-success m-1",
                    cancelButton: "btn btn-danger m-1",
                    input: "form-control"
                }
            });
            document.querySelector(".js-swal-confirm").addEventListener("click", (t => {
                e.fire({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    icon: "warning",
                    showCancelButton: !0,
                    customClass: {
                        confirmButton: "btn btn-danger m-1",
                        cancelButton: "btn btn-secondary m-1"
                    },
                    confirmButtonText: "Yes, delete it!",
                    html: !1,
                    preConfirm: e => new Promise((e => {
                        setTimeout((() => {
                            e()
                        }), 50)
                    }))
                }).then((t => {
                    t.value ? e.fire("Deleted!", "Your imaginary file has been deleted.", "success") : "cancel" === t.dismiss && e.fire("Cancelled", "Your imaginary file is safe :)", "error")
                }))
            }))
        }
        static init() {
            this.sweetAlert2()
        }
    }.init());

    // Form Validation
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('js-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('is-valid');
                }, false);
            });
        }, false);
    })();
</script>
@endsection
