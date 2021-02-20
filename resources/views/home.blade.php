@extends('layouts.dashboard')

@section('contents')

<div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Dashboard</h4>
                <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                    <ul class="quick-links">
                    <li><a href="{{ route('deposits') }}">Deposit funds</a></li>
                    <li><a href="{{ route('income') }}">Monitor Earnings</a></li>
                    <li><a href="{{ route('transactions') }}">Transactions</a></li>
                    </ul>
                    <ul class="quick-links ml-auto">
                    <li><a href="{{ route('profile') }}">Settings</a></li>
                    </ul>
                </div>
                
            </div>
        </div>
        
    </div>
    <div class="row">
        <div class="col-lg-12">
            <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
        </div>
    </div>
    <!-- Page Title Header Ends-->
    <div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
        <div class="card-body">
            <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                <div class="wrapper">
                    <h3 class="mb-0 font-weight-semibold">${{$income}}</h3>
                    <h5 class="mb-0 font-weight-medium text-primary">Profit Balance</h5>
                    <p class="mb-0 text-muted">{{ $income_btc }} BTC</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                <div class="d-flex">
                <div class="wrapper">
                    <h3 class="mb-0 font-weight-semibold">${{ $current_investment }}</h3>
                    <h5 class="mb-0 font-weight-medium text-primary">Active Investment</h5>
                    <p class="mb-0 text-muted">{{$current_investment_btc}} BTC</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                <div class="d-flex">
                <div class="wrapper">
                    <h3 class="mb-0 font-weight-semibold">${{$xrate }}</h3>
                    <h5 class="mb-0 font-weight-medium text-primary">1 Bitcoin (BTC)</h5>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                <div class="d-flex">
                <div class="wrapper">
                    <h3 class="mb-0 font-weight-semibold">{{$referral_count}}</h3>
                    <h5 class="mb-0 font-weight-medium text-primary">Referred Members</h5>
                </div>
                </div>
            </div>
                
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body table-responsive">
            <h4 class="card-title mb-0">Deposit Records</h4>
             
            <table class="table mt-1">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Amount ($)</th>
                        <th>Package</th>
                        <th>Status</th>
                        <th>Method</th>
                        <th>Initiated Date</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($deposits as $d => $key)
                        <tr>
                            <td>{{$d + 1 }}</td>
                            <td>${{$key->amount}}</td>
                            <td>{{$key->plan->name}}</td>
                            <td>
                                @if ($key->status == "Pending")
                                    <span class="badge badge-warning p-2">{{$key->status}}</span>
                                @else
                                    <span class="badge badge-success p-2">{{$key->status}}</span>
                                @endif
                            </td>
                            <td>{{$key->method}}</td>
                            <td>{{$key->created_at->diffForHumans()}}</td>
                            <td><a href="{{route('payment', ['id' => $key->id])}}" class="btn btn-success">View details</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
        
    </div>
    
</div>
        
@endsection
