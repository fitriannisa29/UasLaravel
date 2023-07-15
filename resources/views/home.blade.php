@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3 class="card-title text-center">Selamat Datang di TrendyStore Fitri</h3>
                        <p class="card-text text-center">Cek Produk-Produk Di TrendyStore Fitri Sekarang Juga! Ada Banyak Pilihan Pakaian Trendi dan Kekinian Yang Siap Kamu Bawa Pulang. "Yuk, Cekout Sekarang Juga!!!"</p>
                        <a href="{{ url('/pelanggan') }}"
                            class="btn btn-info my-3 w-100">{{ __('Anda Berhasil Login') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
