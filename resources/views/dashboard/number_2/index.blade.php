@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4 {{ $cardAnimate }}">
                <div class="card-header d-flex justify-content-between align-items-center pb-0">
                    <h5 class="mb-0">
                        Tabel Data Jumlah Transaksi Setiap Customer
                    </h5>
                </div>

                <div class="card-body">
                    <table class="table dt-responsive" id="datatable">
                        <thead class="text-center">
                            <tr>
                                <th>
                                    No
                                </th>

                                <th>
                                    Nama Customer
                                </th>

                                <th>
                                    Negara
                                </th>

                                <th>
                                    Total Transaksi
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    {{-- * Custom JS --}}
    <script src="{{ asset('assets/custom/dashboard/number_2/index.js') }}"></script>
@endsection