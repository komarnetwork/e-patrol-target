@extends('layouts.backend')

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Dashboard</h1>
            <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">App</li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <div class="row items-push">
        <!-- Quick Menu -->
        <div class="pt-4 px-4 bg-body-dark rounded push">
            <div class="row items-push">
                <div class="col-6 col-md-3 col-xl-3">
                    <a class="block block-rounded block-link-pop text-center d-flex align-items-center h-100 mb-0" href="{{ route('userlist.index') }}">
                        <div class="block-content">
                            <p class="mb-2 d-sm-block text-primary">
                                <i class="fa fa-users opacity-50 fa-2x"></i>
                            </p>
                            <p class="fw-semibold fs-sm text-uppercase">Data Personil</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-xl-3">
                    <a class="block block-rounded block-link-pop text-center d-flex align-items-center h-100 mb-0" href="{{ route('absen.index') }}">
                        <div class="block-content">
                            <p class="mb-2 d-sm-block text-primary">
                                <i class="fa fa-clock opacity-50 fa-2x"></i>
                            </p>
                            <p class="fw-semibold fs-sm text-uppercase">Data Presensi</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-xl-3">
                    <a class="block block-rounded block-link-pop text-center d-flex align-items-center h-100 mb-0" href="{{ route('asset.index') }}">
                        <div class="block-content">
                            <p class="mb-2 d-sm-block text-primary">
                                <i class="fa fa-table opacity-50 fa-2x"></i>
                            </p>
                            <p class="fw-semibold fs-sm text-uppercase">Data Asset</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-xl-3">
                    <a class="block block-rounded block-link-pop text-center d-flex align-items-center h-100 mb-0" href="javascript:void(0)">
                        <div class="block-content">
                            <p class="mb-2 d-sm-block text-primary">
                                <i class="fa fa-clipboard-list opacity-50 fa-2x"></i>
                            </p>
                            <p class="fw-semibold fs-sm text-uppercase">Add Patroli</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <!-- END Quick Menu -->
    </div>
</div>
<!-- END Page Content -->
@endsection
