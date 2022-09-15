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
                                    <li class="breadcrumb-item active">Tambah Products</li>
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
                        <form action="{{ url('admin/produk') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4"><label class="mb-3">Nama Toko</label>
                                    <select name="id_penjual" class="form-control">
                                        <option value="">Pilih Nama Toko</option>
                                        @foreach ($list_penjual as $penjual)
                                            <option value="{{ $penjual->id }}">{{ $penjual->nama_toko }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4"><label class="mb-3">Nama produk</label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                                <div class="col-md-4"><label class="mb-3">Foto</label>
                                    <input type="file" class="form-control" name="foto" accept=".jpg">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="my-3">Harga</label>
                                        <input type="text" id="date-format" class="form-control" name="harga">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="my-3">Stock</label>
                                        <input type="form-control" id="timepicker" class="form-control" name="stock">
                                    </div>
                                </div>
                            </div>
                            <label class="my-3">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control"></textarea>
                            <div style="margin-top: 2%" class="float-right">
                                <button class="btn btn-primary">Submit</button>
                                <a href="{{ url('admin/produk') }}" class="btn btn-danger">Cancel</a>
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
