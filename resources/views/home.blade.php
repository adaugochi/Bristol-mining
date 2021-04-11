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
    <div class="row my-4">
        <div class="col-md-4 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="wrapper">
                        <p class="text-uppercase card-header-text">Profit Balance</p>
                        <h3 class="mb-0 font-weight-semibold">${{$income}}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="wrapper">
                        <p class="text-uppercase card-header-text">Active Investment</p>
                        <h3 class="mb-0 font-weight-semibold">${{ $current_investment }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="wrapper">
                        <p class="text-uppercase card-header-text">1 Bitcoin (BTC)</p>
                        <h3 class="mb-0 font-weight-semibold">${{$xrate }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 mt-4 mt-lg-0">
            <div class="card">
                <div class="card-body">
                    <div class="wrapper">
                        <p class="text-uppercase card-header-text">Referred Members</p>
                        <h3 class="mb-0 font-weight-semibold">{{$referral_count}}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="wrapper">
                        <p class="text-uppercase card-header-text">Total Investment</p>
                        <h3 class="mb-0 font-weight-semibold">${{$total_investment}}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="wrapper">
                        <p class="text-uppercase card-header-text">Pending Investment</p>
                        <h3 class="mb-0 font-weight-semibold">${{$pending_investment}}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="wrapper">
                        <p class="text-uppercase card-header-text">Failed Investment</p>
                        <h3 class="mb-0 font-weight-semibold">$0</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="wrapper">
                        <p class="text-uppercase card-header-text">Total Referral Balance</p>
                        <h3 class="mb-0 font-weight-semibold">${{ $total_referral }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="wrapper">
                        <p class="text-uppercase card-header-text">Total Withdrawal</p>
                        <h3 class="mb-0 font-weight-semibold">${{ $total_withdrawal }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="card py-4">
            <div class="card-inner">
                <div class="mb-4">
                    <div class="mx-auto text-center">
                        <h3 class="title">Refer Friends & Earn More!</h3>
                        <p>Use the below link to invite your friends.</p>
                    </div>
                </div>
                <div class="form-control-wrap">
                    <input type="text" class="form-control form-ref" id="refUrl" value="https://motasko.com/register?ref=1106684">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
