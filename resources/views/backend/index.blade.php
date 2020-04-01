@extends('backend.layouts.dashboard')


@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i>&nbsp;Sales Management</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Sales Management</a></li>
        </ul>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

            </div>
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <table class="table table-hover table-bordered text-center" id="salesTable">
                            <thead>
                                <tr>
                                    <th style="width:50px">No</th>
                                    <th>Reference No</th>
                                    <th>Products</th>
                                    <th>Country</th>
                                    <th>Name as IC</th>
                                    <th>Phone Number</th>
                                    <th>Address</th>
                                    <th>Postcode</th>
                                    <th>Bank</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data as $item)
                                <tr>
                                    <td>{{ (($data->currentPage() - 1 ) * $data->perPage() ) + $loop->iteration }}</td>
                                    <td class="reference_no">{{$item->reference_no}}</td>
                                    <td class="product"></td>
                                    <td class="country" data-id="{{$item->customer->country_id ?? ''}}">{{$item->customer->country->name}}</td>
                                    <td class="name_as_ic">{{$item->customer->name_as_ic ?? ''}}</td>
                                    <td class="phone_number">{{$item->customer->phone_number ?? ''}}</td>
                                    <td class="address">{{$item->customer->address ?? ''}}</td>
                                    <td class="postcode">{{$item->customer->postcode ?? ''}}</td>
                                    <td class="bank_id" data-id="{{$item->payment->bank_id}}">
                                        @if($item->payment->type = 2)
                                            Payoneer
                                        @else
                                            {{$item->payment->bank->name ?? ''}}
                                        @endif
                                    </td>
                                    <td class="username">{{$item->payment->username}}</td>
                                    <td class="password">{{$item->payment->password}}</td>
                                    <td class="amount">{{$item->total_amount}}</td>
                                    <td class="action py-2">
                                        <a href="{{route('sale.delete', $item->id)}}" class="btn btn-danger btn-sm" onclick="return window.confirm('Are you sure?')"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="text-center">No Data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="clearfix">
                            <div class="float-left" style="margin: 0;">
                                <p>Total <strong style="color: red">{{ $data->total() }}</strong>
                                    Items</p>
                            </div>
                            <div class="float-right" style="margin: 0;">
                                {!! $data->appends([])->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
