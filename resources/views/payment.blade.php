@extends('layouts.dashboard')

@section('contents')
<div class="content-wrapper">
    <!-- Page Title Header Starts-->
    <div class="row page-title-header">
        <div class="col-12">
            <div class="page-header">
                <h4 class="page-title">Fund Wallet</h4>
            </div>
        </div>   
    </div>
    <!-- Page Title Header Ends-->

    <div class="row">
        @if(Session::has('danger'))
          <div class="col-md-12">
            <div class="alert alert-danger">
              {{ Session::get('danger')}}
            </div>
          </div>
        @endif
        @if(Session::has('success'))
          <div class="col-md-12">
            <div class="alert alert-success">
              {{ Session::get('success')}}
            </div>
          </div>
        @endif
    </div>
    
<div class="row">
    <div class="col-lg-12">
      <div class="card-head d-flex justify-content-between align-items-center">
        <h4 class="card-title mb-0">Deposit Details</h4>
        <a href="{{route('deposits')}}" class="btn btn-sm btn-auto btn-primary d-sm-block d-none pull-right"><em class="fas fa-arrow-left mr-3"></em>Back</a><a href="{{route('deposits')}}" class="btn btn-icon btn-sm btn-primary d-sm-none"><em class="fas fa-arrow-left"></em></a></div>
      <div class="gaps-1-5x"></div>
    </div>
</div>

<div class="row mt-2 table-responsive">

    <table class="table table-bordered">
        <tr>
            <td>Transaction Date</td>
            <td>{{$deposit->created_at->format('d M, Y H:m:i')}}</td>
        </tr>
        <tr>
            <td>Transaction Status</td>
            <td>
              @if ($deposit->status == "Pending")
                  <span class="badge badge-warning p-2">{{$deposit->status}}</span>
              @else
                  <span class="success success-warning p-2">{{$deposit->status}}</span>
              @endif
            </td>
        </tr>
        <tr>
            <td>Plan</td>
            <td>{{$deposit->plan->name}}</td>
        </tr>
        <tr>
          <td>Amount (USD)</td>
          <td><strong>${{$deposit->amount}}</strong></td>
        </tr>
        <tr>
          <td>Return of Investment</td>
          <td><strong>${{$deposit->due_amount}}</strong></td>
        </tr>
        <tr>
          <td>Maturity</td>
          <td><strong>{{date('d/m/Y H:i:s', $deposit->due_date)}}</td>
        </tr>
        <tr>
          <td>Payment Method</td>
          <td><strong>{{ $deposit->method }}</td>
        </tr>
        <tr>
          <td colspan="2">
            @if (sizeof($deposit->proofs) > 0)
              <ul>
                @foreach ($deposit->proofs as $p)
                    <li><a target="_blank" href="https://www.blockchain.com/btc/tx/{{$p->transaction_code}}">trx: {{$p->transaction_code}}</a>
                @endforeach
              </ul>
            @endif
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <h4>Upload Payment Proof</h4>
            <div class="mt-2">
              <form action="{{ route('proof') }}" method="post">
                @csrf
                <input type="hidden" name="deposit_id" value="{{$deposit->id}}">
                <input type="text" class="form-control" required style="width: 380px; max-width: 100%;" name="transaction_code" placeholder="Enter Transaction ID" required> <br><br>
                <button class="btn btn-primary btn-auto" type="submit" name="submit">Upload Trans ID</button>
              </form>
            </div>
          </td>
        </tr>
    </table>
 
    <p class="text-danger">Note that maturity period starts counting from the minute your payment is approved</p>
  </div>
  <!-- .card -->
</div>
@endsection