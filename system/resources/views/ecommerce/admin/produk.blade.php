@extends('template.admin')
@section('content')
    <div class="shop-area mb-20">
        <div class="container">
            <div class="row">
                <div class="col-md-2 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Filter</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('filter/harga') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="control-label">Harga</label>
                                    <input type="text" class="form-control" name="harga" value="{{ $harga ?? '' }}">
                                </div>
                                <button class="btn btn-primary mt-3"><i class="fa fa-search"></i> Filter</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-8 mt-3">
                    <div class="tab-content" id="productGridTabContent">
                        <div class="tab-pane fade  show active" id="FourCol" role="tabpanel"
                            aria-labelledby="FourCol-tab">
                            <div class="tp-wrapper">
                                <div class="row g-0">
                                    @foreach ($list_produk->sortBy('harga') as $produk)
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                            <div class="product__item product__item-d">
                                                <div class="product__thumb fix">
                                                    <div class="product-image w-img">
                                                        <a href="#">
                                                            <img style="height:200px; width:200px;"
                                                                src="{{ url("public/$produk->foto") }}" alt="product">
                                                        </a>
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="#" class="icon-box icon-box-1" data-bs-toggle="modal"
                                                            data-bs-target="#modal{{ $produk->id }}">
                                                            <i class="fal fa-eye"></i>
                                                            <i class="fal fa-eye"></i>
                                                        </a>

                                                        <a href="#" class="icon-box icon-box-1">
                                                            <i class="fal fa-heart"></i>
                                                            <i class="fal fa-heart"></i>
                                                        </a>
                                                        <a href="#" class="icon-box icon-box-1">
                                                            <i class="fal fa-layer-group"></i>
                                                            <i class="fal fa-layer-group"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product__content-3">
                                                    <h6><a href="#">{{ $produk->nama }}</a></h6>
                                                    <div class="price mb-10">
                                                        <span>{{ $produk->harga_string }}</span>
                                                    </div>
                                                    <div class="price mb-10">
                                                        <span>{{ $produk->stock }}</span>
                                                    </div>
                                                </div>
                                                <div class="product__add-cart-s text-center">
                                                    <button type="button"
                                                        class="cart-btn d-flex mb-10 align-items-center justify-content-center w-100">
                                                        Add to Cart
                                                    </button>
                                                    <button type="button"
                                                        class="wc-checkout d-flex align-items-center justify-content-center w-100"
                                                        data-bs-toggle="modal" data-bs-target="#productModalId">
                                                        Quick View
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="modal{{ $produk->id }}" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered product__modal" role="document">
                                                <div class="modal-content">
                                                    <div class="product__modal-wrapper p-relative">
                                                        <div class="product__modal-close p-absolute">
                                                            <button data-bs-dismiss="modal"><i
                                                                    class="fal fa-times"></i></button>
                                                        </div>
                                                        <div class="product__modal-inner">
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                                    <div class="product__modal-box">
                                                                        <div class="tab-content" id="modalTabContent">
                                                                            <div class="tab-pane fade show active"
                                                                                id="navmodal-1" role="tabpanel"
                                                                                aria-labelledby="navmodal-1-tab">
                                                                                <div class="product__modal-img w-img">
                                                                                    <img src="{{ url("public/$produk->foto") }}"
                                                                                        alt="product">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                                    <div class="product__modal-content">
                                                                        <h4><a href="#">{{ $produk->nama }}</a></h4>

                                                                        <div class="product__price">
                                                                            <span>{{ $produk->harga_string }}</span>
                                                                        </div>
                                                                        <div class="product__modal-des mt-20 mb-15">
                                                                            <ul>
                                                                                <li><a href="#"><i
                                                                                            class="fas fa-circle"></i>
                                                                                        {{ $produk->deskripsi }}</a></li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="product__stock mb-20">
                                                                            <span class="mr-10">Availability :</span>
                                                                            <span>{{ $produk->stock }}</span>
                                                                        </div>
                                                                        <div class="product__modal-form">
                                                                            <form action="#">
                                                                                <div
                                                                                    class="pro-quan-area d-lg-flex align-items-center">
                                                                                    <div
                                                                                        class="product-quantity mr-20 mb-25">
                                                                                        <div
                                                                                            class="cart-plus-minus p-relative">
                                                                                            <input type="text"
                                                                                                value="1" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="pro-cart-btn mb-25">
                                                                                        <button class="cart-btn"
                                                                                            type="submit">Add to
                                                                                            cart</button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="product__stock mb-30">
                                                                            <ul>
                                                                                <li><a href="#">
                                                                                        <span
                                                                                            class="cat mr-10">Penjual:</span>
                                                                                        <span>{{ $produk->penjual->nama }}</span></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div><br>
                    {{ $list_produk->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
