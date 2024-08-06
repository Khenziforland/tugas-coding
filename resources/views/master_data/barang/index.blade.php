@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4 {{ $cardAnimate }}">
                <div class="card-header d-flex justify-content-between align-items-center pb-0">
                    <h5 class="mb-0">
                        Tabel Barang
                    </h5>

                    <div class=" mb-3">
                        <a href="{{ url('master-data/barang/tambah-data') }}">
                            <button type="button" class="btn btn-primary">
                                <i class="menu-icon tf-icons ti ti-plus"></i>
                                Tambah
                            </button>
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table dt-responsive" id="datatable">
                        <thead class="text-center">
                            <tr>
                                <th>
                                    No
                                </th>

                                <th>
                                    Nama Barang
                                </th>

                                <th>
                                    Stok
                                </th>

                                <th>
                                    Jumlah Terjual
                                </th>

                                <th>
                                    Tanggal Transaksi
                                </th>

                                <th>
                                    Jenis Barang
                                </th>

                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <form id="formSubmit" method="POST" action="javascript:void(0)">
        @method('delete')
        @csrf
    </form>
@endsection

@section('custom_js')
    {{-- * Custom JS --}}
    <script src="{{ asset('assets/custom/master_data/barang/index.js') }}"></script>
@endsection
