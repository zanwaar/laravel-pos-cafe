@extends('layouts.app')

@section('title', 'Order Detail')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
<div class="px-4 pt-5">
    <section class="section pt-5">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('order.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Order Detail</h1>

            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Orders</a></div>
                <div class="breadcrumb-item">Order Detail</div>
            </div>
        </div>

        <div class="section-body">
            <div class="invoice">
                <div class="invoice-print">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="invoice-title">
                                <h2>Invoice</h2>
                                <div class="invoice-number">Order #12345</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <address>
                                        <strong>Payment Method:</strong><br>
                                        Visa ending **** 4242<br>
                                        ujang@maman.com
                                    </address>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <address>
                                        <strong>Order Date:</strong><br>
                                        September 19, 2018<br><br>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="section-title">Order Summary</div>
                            <p class="section-lead">All items here cannot be deleted.</p>
                            <div class="table-responsive">
                                <table class="table-striped table-hover table-md table">
                                    <tr>
                                        <th data-width="40">#</th>
                                        <th>Item</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-right">Totals</th>
                                    </tr>
                                    @foreach ($orderItems as $item)
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $item->product->name }}</td>
                                        </td>
                                        <td class="text-center">
                                            {{ $item->product->price }}
                                        </td>
                                        <td class="text-center">
                                            {{ $item->quantity }}
                                        </td>
                                        <td class="text-right">
                                            {{ $item->product->price * $item->quantity }}

                                        </td>

                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="row ">
                                <div class="col-lg-8">

                                </div>
                                <div class="col-lg-4 text-right">
                                    <hr class="mt-2 mb-2">
                                    <div class="invoice-detail-item">
                                        <div class="invoice-detail-name">Total</div>
                                        <div class="invoice-detail-value invoice-detail-value-lg">{{ $order->total_price }}</div>
                                    </div>
                                    <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Print</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @include('layouts.alert')
                </div>
            </div>
            <h2 class="section-title">Order Detail</h2>
            <p class="section-lead">
            <div>Total Price {{ $order->total_price }}</div>
            <div>Transaction Time {{ $order->transaction_time }}</div>
            <div>Total Item {{ $order->total_item }}</div>

            </p>


            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Products</h4>
                        </div>
                        <div class="card-body">



                            <div class="clearfix mb-3"></div>

                            <div class="table-responsive">
                                <table class="table-striped table">
                                    <tr>

                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>

                                    </tr>
                                    @foreach ($orderItems as $item)
                                    <tr>

                                        <td>{{ $item->product->name }}</td>
                                        </td>
                                        <td>
                                            {{ $item->product->price * $item->quantity }}
                                        </td>
                                        <td>
                                            {{ $item->quantity }}
                                        </td>
                                        <td>

                                            {{ $item->product->price * $item->quantity }}
                                        </td>

                                    </tr>
                                    @endforeach


                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->
<script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush