@extends('layouts.backend')

@section('css_before')
   <!-- Page JS Plugins CSS -->
   <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
   <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5-responsive/css/responsive.dataTables.min.css') }}">
   <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
   <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5-responsive/css/responsive.bootstrap5.min.css') }}">
@endsection

@section('content')
   <!-- Page Content -->
   <div class="content">
      <div class="block block-rounded">
         <div class="block-header block-header-default">
            <h3 class="block-title">Asset List</h3>
         </div>
         <div class="block-content">

            @if (session('error'))
               <div class="alert alert-danger">
                  {{ session('error') }}
               </div>
            @endif
            @if (session('success'))
               <div class="alert alert-success">
                  {{ session('success') }}
               </div>
            @endif

            <div class="row py-3">
               <div class="col-md-6">
                  <!-- Pop Out -->
                  <button type="button" class="btn btn-primary push" data-bs-toggle="modal"
                     data-bs-target="#modal-block-popout"><i class="fa fa-plus"></i> Add Asset</button>
                  <!-- END Pop Out -->
               </div>

               <!-- Pop Out Block Modal -->
               <div class="modal fade" id="modal-block-popout" tabindex="-1" role="dialog"
                  aria-labelledby="modal-block-popout" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-popout" role="document">
                     <div class="modal-content">
                        <div class="block block-rounded block-themed block-transparent mb-0">

                           <div class="block-header bg-primary-dark">
                              <h3 class="block-title">Tambah Asset</h3>
                              <div class="block-options">
                                 <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                 </button>
                              </div>
                           </div>
                           <!-- Content Modal -->
                           <form action="{{ route('asset.store') }}" method="post">
                              @csrf
                              <div class="block-content">
                                 <div class="form-floating mb-4">
                                    <input type="text" class="form-control  @error('nama_asset') is-invalid @enderror"
                                       id="nama_asset" placeholder="nama_asset" name="nama_asset" autofocus required>
                                    <label class="form-label" for="nama_asset">Nama Asset</label>
                                    @error('nama_asset')
                                       <div class="invalid-feedback">
                                          Please enter a asset name
                                       </div>
                                    @enderror
                                 </div>
                                 <div class="form-floating mb-4">
                                    <input type="text" class="form-control @error('lokasi_point') is-invalid @enderror"
                                       id="lokasi_point" name="lokasi_point" placeholder="lokasi_point" required>
                                    <label class="form-label" for="lokasi_point">Lokasi Point</label>
                                    @error('lokasi_point')
                                       <div class="invalid-feedback">
                                          Please enter a lokasi_point
                                       </div>
                                    @enderror
                                 </div>

                                 <div class="mb-3">
                                    <label class="form-label" for="deskripsi">Deskripsi <span
                                          class="text-danger">*</span>
                                    </label>
                                    <textarea id="deskripsi" class="form-control" cols="20" rows="10"></textarea>
                                 </div>

                                 <div class="form-floating mb-4">
                                    <input type="text" class="form-control @error('jenis_asset') is-invalid @enderror"
                                       id="jenis_asset" name="jenis_asset" placeholder="name@example.com" required>
                                    <label class="form-label" for="jenis_asset">Jenis Asset</label>
                                    @error('jenis_asset')
                                       <div class="invalid-feedback">
                                          Please enter a jenis_asset
                                       </div>
                                    @enderror
                                 </div>

                              </div>
                              <div class="block-content block-content-full text-end bg-body">
                                 <button type="submit" class="btn btn-sm btn-primary"
                                    data-bs-dismiss="modal">Submit</button>
                              </div>
                           </form>

                        </div>
                     </div>
                  </div>
               </div>


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
                                 <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip"
                                    title="Edit">
                                    <i class="fa fa-pencil-alt"></i>
                                 </button>
                                 <button type="button" class="js-swal-confirm btn btn-sm btn-alt-secondary"
                                    data-bs-toggle="tooltip" title="Delete">
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
   </div>
   <!-- END Page Content -->
@endsection

@section('js_after')
   <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
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
