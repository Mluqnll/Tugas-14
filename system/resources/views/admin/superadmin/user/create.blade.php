@extends('template.base')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col">
                                <h4 class="page-title">User</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                                    <li class="breadcrumb-item active">Tambah User</li>
                                </ol>
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center">
                                <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                    <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                    <span class="" id="Select_date">Jan 11</span>
                                    <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-outline-primary">
                                    <i data-feather="download" class="align-self-center icon-xs"></i>
                                </a>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('admin/user') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label class="mb-3">Nama</label>
                            <input type="text" class="form-control" name="nama">
                            <div class="row">
                                <div class="col-md-4">
                                    <label class="mb-3">Username</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                                <div class="col-md-4">
                                    <label class="mb-3">Jenis Kelamin</label>
                                    <input type="text" class="form-control" name="jenis_kelamin">
                                </div>
                                <div class="col-md-4">
                                    <label class="mb-3">Foto</label>
                                    <input type="file" class="form-control" name="foto" accept=".jpg">
                                </div>
                            </div>
                            <label class="mb-3">Email</label>
                            <input type="email" class="form-control" name="email">
                            <label class="mb-3">Password</label>
                            <input type="password" class="form-control" name="password">
                            <div style="margin-top: 2%" class="float-right">
                                <button class="btn btn-primary">Submit</button>
                                <a href="{{ url('admin/user') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end row-->

    </div><!-- container -->
@endsection
