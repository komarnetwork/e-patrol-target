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
      <!-- Dynamic Table with Export Buttons -->
      <div class="block block-rounded">
         <div class="block-header block-header-default">
            <h3 class="block-title">Data Absen</h3>
         </div>
         <div class="block-content block-content-full">

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
                           {{ date('F d, Y', strtotime($item->datang)) }} at
                           {{ date('g:ia', strtotime($item->datang)) }}
                        </td>
                        <td style="width: 35px;">
                           @if ($item->pulang)
                              {{ date('F d, Y', strtotime($item->pulang)) }} at
                              {{ date('g:ia', strtotime($item->pulang)) }}
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
