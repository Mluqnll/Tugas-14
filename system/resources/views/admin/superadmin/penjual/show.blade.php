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
                                    <li class="breadcrumb-item active">Detail User</li>
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
                            @csrf
                            <label class="mb-3">Nama :</label>
                            <label for="">{{ $penjual->nama }}</label>
                            <br>
                            <label class="my-3">Username :</label>
                            <label for="">{{$penjual->username }}</label>
                            <br>
                            <label class="my-3">Email :</label>
                            <label for="">{{ $penjual->email }}</label>
                            <br>
                            <label class="my-3">No Hp :</label>
                            <label for="">{{ $penjual->nomor_hp }}</label>
                            <br>
                            <label class="my-3">Nama Toko :</label>
                            <label for="">{{ $penjual->nama_toko }}</label>
                            <br>
                            <div style="margin-top: 2%" class="float-right">
                                <a href="{{ url('admin/penjual') }}" class="btn btn-danger">Kembali</a>
                            </div>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end row-->

    </div><!-- container -->

    </div>
@endsection
