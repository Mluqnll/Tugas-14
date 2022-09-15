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
                                <h4 class="page-title">Pembeli</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                                    <li class="breadcrumb-item active">Edit Pembeli</li>
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
                        <form action="{{ url('admin/pembeli', $pembeli->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <label class="mb-3">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $pembeli->nama }}">
                            <div class="row">
                                <div class="col md-6">
                                    <div class="form-group">
                                        <label class="my-3">Username</label>
                                        <input type="text" id="date-format" class="form-control" name="username"
                                            value="{{ $pembeli->username }}">
                                    </div>
                                </div>
                                <div class="col md-6">
                                    <div class="form-group">
                                        <label class="my-3">Email</label>
                                        <input type="form-control" id="timepicker" class="form-control" name="email"
                                            value="{{ $pembeli->email }}">
                                    </div>
                                </div>
                            </div>
                                <div style="margin-top: 2%" class="float-right">
                                    <button class="btn btn-primary">Submit</button>
                                    <a href="{{ url('admin/pembeli') }}" class="btn btn-danger">Cancel</a>
                                </div>
                        </form>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end row-->

        </div><!-- container -->
    </div>

@endsection
