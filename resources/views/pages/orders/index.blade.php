@extends('layouts.app')

@section('title', 'Orders')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
<div class="px-4 pt-5">
    <section class="section pt-5">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('home') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Data Transaksi</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/">Home</a></div>
                <div class="breadcrumb-item">Transaksi</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-icon shadow-primary bg-danger" style="border-radius: 50%;">
                            <i class="fas fa-archive"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Transaksi Keluar</h4>
                            </div>
                            <div class="card-body">
                                Transaksi Keluar
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-icon shadow-primary bg-primary" style="border-radius: 50%;">
                            <i class="fas fa-archive"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Transaksi Masuk</h4>
                            </div>
                            <div class="card-body">
                                Transaksi Masuk
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h4 class="text-dark" style="font-size: 26px;">Transaksi Keluar</h4>
                            <div class="card-header-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped table">
                                    <tr class="bg-danger text-white">

                                        <th>Transaction Time</th>
                                        <th>Total Price</th>
                                        <th>Total Item</th>
                                        <th>Kasir</th>
                                    </tr>
                                    @foreach ($orders as $order)
                                    <tr>

                                        <td><a href="{{ route('order.show', $order->id) }}">{{ $order->transaction_time }}</a>
                                        </td>
                                        <td>
                                            {{ $order->total_price }}
                                        </td>
                                        <td>
                                            {{ $order->total_item }}
                                        </td>
                                        <td>
                                            {{ $order->kasir->name }}

                                        </td>

                                    </tr>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->
<script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush