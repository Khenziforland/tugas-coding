@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4 {{ $cardAnimate }}">
                <div class="card-header">
                    <h5 class="mb-3">
                        Ubah Data
                    </h5>

                    <a href="{{ url('master-data/barang') }}">
                        <button type="button" class="btn btn-sm btn-secondary">
                            <i class="menu-icon tf-icons ti ti-arrow-left"></i>
                            Kembali
                        </button>
                    </a>
                </div>

                <div class="card-body">
                    <form class="mb-3" id="formSubmit" method="POST" action="javascript:void(0)"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="row">
                            <input type="hidden" name="id" id="id" value="{{ $barang->hash_id }}">

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label" for="name">
                                        Nama Barang
                                    </label>

                                    <input type="text" class="form-control" name="name" id="name"
                                        value="{{ $barang->name }}" placeholder="Masukan Nama Barang" autocomplete="off">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="stock">
                                            Stock
                                        </label>

                                        <input type="text" class="form-control" name="stock" id="stock"
                                            value="{{ $barang->stock }}" placeholder="Masukan Stock Barang" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="quantity_sold">
                                            Jumlah Terjual
                                        </label>

                                        <input type="text" class="form-control" name="quantitySold" id="quantitySold"
                                            value="{{ $barang->quantity_sold }}" placeholder="Masukan Jumlah Terjual"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="transactionDatetime">
                                            Tanggal Transaksi
                                        </label>

                                        <input type="text" class="form-control custom-datepicker"
                                            name="transactionDatetime" id="transactionDatetime"
                                            value="{{ $barang->transaction_datetime }}" placeholder="Masukan Tanggal Transaksi"
                                            autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="itemType">
                                            Jenis Barang
                                        </label>

                                        <input type="text" class="form-control" name="itemType" id="itemType"
                                            value="{{ $barang->item_type }}" placeholder="Masukan Jenis Barang"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <button type="submit" class="btn btn-primary w-100">
                            <i class="ti ti-checkbox me-1"></i>
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    {{-- * Custom JS --}}
    <script src="{{ asset('assets/custom/master_data/barang/edit.js') }}"></script>
@endsection
