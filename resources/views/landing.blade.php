@extends('layouts.simple')

@section('content')
   <!-- Hero -->
   <div class="hero bg-body-extra-light">
      <div class="hero-inner">
         <div class="content content-full text-center">
            <h1 class="fw-bold mb-2">
               <span class="text-primary">E-Patrol-Target</span>
            </h1>
            <h2 class="h4 fw-medium text-muted mb-5">
               Selamat datang di e-patrol-target
            </h2>
            <a class="btn btn-hero btn-primary px-4 py-3 d-inline-block" href="{{ route('login') }}">
               <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Enter Login
            </a>
         </div>
      </div>
   </div>
   <!-- END Hero -->
@endsection
