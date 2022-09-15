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
                                <h4 class="page-title">Products</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                                    <li class="breadcrumb-item active">Detail Products</li>
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
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <img style="width:100%" src="{{ url("public/$produk->foto") }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            @csrf
                            <label class="mb-3">Nama produk :</label>
                            <label for="">{{ $produk->nama }}</label>
                            <br>
                            <label class="my-3">Nama Penjual :</label>
                            <label for="">{{ $produk->penjual->nama }}</label>
                            <br>
                            <label class="my-3">Stock :</label>
                            <label for="">{{ $produk->stock }}</label>
                            <br>
                            <label class="my-3">Harga :</label>
                            <label for="">{{ $produk->harga_string }}</label>
                            <br>
                            <label class="my-3">Deskripsi :</label>
                            <label for="">{{ $produk->deskripsi }}</label>
                            <br>
                            <label class="my-3">Tanggal Masuk :</label>
                            <label for="">{{ $produk->tanggal_produksi }}</label>
                            <br>
                            <label class="my-3">Perbaharuan :</label>
                            <label for="">{{ $produk->updated_at->format('d M Y') }}</label>
                            <div style="margin-top: 2%" class="float-right">
                                <a href="{{ url('admin/produk') }}" class="btn btn-danger">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end row-->

    </div><!-- container -->
@endsection
