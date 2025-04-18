@extends('super_admins.layouts.master')

@section('title')
View Doctor Category
@endsection

@section('css')
<!-- daterange picker -->
<link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
@endsection

@section('content')
@if ($errors->any())
@endif
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-4 pt-4 pt-lg-0">

            <div class="col-sm-6">
                <h2 class="main-content-title fw-bold mb-0">Doctor Main Category</h2>
                <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item"><a href="{{ route('super_admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('super_admin.doctor_main_categories.index') }}">Doctor Main
                            Categories</a></li>
                    <li class="breadcrumb-item active">
                        View Doctor Main Category
                    </li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-secondary">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="border h-100  rounded p-3 border-light">
                                    <h6 class="fw-bold text-uppercase mb-0">Name</h6>
                                    <p class="mb-0 text-muted">{{ $doctor_main_category->name ? $doctor_main_category->name : '--' }}</p>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="border h-100  rounded p-3 border-light">
                                    <h6 class="fw-bold text-uppercase mb-0">Image</h6>
                                    <p class="mb-0 text-muted">
                                        @if ($doctor_main_category->image)
                                            <img class="mt-3" src="{{ url($doctor_main_category->image) }}" width="75px" height="75px"
                                                alt="{{ $doctor_main_category->slug }}">

                                        @else
                                            --
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="border h-100  rounded p-3 border-light">
                                    <h6 class="fw-bold text-uppercase mb-0">Image</h6>
                                    <p class="mb-0 text-muted">
                                        @if ($doctor_main_category->icon)
                                            <img class="mt-3" src="{{ url($doctor_main_category->icon) }}" width="75px" height="75px" alt="{{ $doctor_main_category->slug }}">
                                        @else
                                            --
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                    <div class="border h-100  rounded p-3 border-light">
                                        <h6 class="fw-bold text-uppercase mb-0">Slug</h6>
                                        <p class="mb-0 text-muted">{{ $doctor_main_category->slug ? $doctor_main_category->slug : '--' }}</p>
                                    </div>
                                </div>
                            <div class="col-md-3 mb-3">
                                    <div class="border h-100  rounded p-3 border-light">
                                        <h6 class="fw-bold text-uppercase mb-0">Status</h6>
                                        <p class="mb-0 text-muted">{{ $doctor_main_category->is_active ? 'Active' : 'Inactive' }}</p>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="border h-100  rounded p-3 border-light">
                                        <h6 class="fw-bold text-uppercase mb-0">Created At</h6>
                                        <p class="mb-0 text-muted">{{ date_format($doctor_main_category->created_at, 'd-m-Y') }}</p>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="border h-100  rounded p-3 border-light">
                                        <h6 class="fw-bold text-uppercase mb-0">Description</h6>
                                        <p class="mb-0 text-muted">{!! $doctor_main_category->description !!}</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <!-- form start -->

                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection

@section('scripts')
<!-- date-range-picker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
@endsection
