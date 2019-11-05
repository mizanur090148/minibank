@extends('backend.layout')
@section('content')
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">      
      <h3 class="page-title">Transaction</h3>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="card card-small mb-4">
        <div class="card-header border-bottom">
          {{-- <h6 class="m-0">Fund Transfer List</h6> --}}
          <a class="btn btn-sm btn-info" href="{{ url('transaction/create') }}">
            <i class="glyphicon glyphicon-plus"></i> New Transaction
          </a>
        </div>
        @include('backend.partials.response_message')

        <div class="card-body p-0 pb-3 text-center">
          <table class="table table-sm">
            <thead class="bg-light">
              <tr>
                <th scope="col" class="border-0">#</th>
                <th scope="col" class="border-0">Transaction ID</th>
                <th scope="col" class="border-0">Receiver Name</th>                
                <th scope="col" class="border-0">Amount</th>
                <th scope="col" class="border-0">Sender Name</th>
                <th scope="col" class="border-0">Remarks</th>
              </tr>
            </thead>
            <tbody>
              @forelse($transactions as $transaction)
                <tr style="height: 20px !important;">
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ str_pad($transaction->id, 10, '0', STR_PAD_LEFT) }}</td>
                  <td>{{ $transaction->receiver->email }}</td>
                  <td>{{ $transaction->amount }}</td>
                  <td>{{ $transaction->sender->email }}</td>
                  <td>{{ $transaction->remarks }}</td>
                </tr>
              @empty
                <tr>
                  <td colspan="6" class="text-danger">Not found</td>                  
                </tr>
              @endforelse
            </tbody>
            <tfoot>
              @if($transactions->total() > 15)
                <tr>
                  <td colspan="4" align="center">
                    {{ $transactions->appends(request()->except('page'))->links() }}
                  </td>
                </tr>
              @endif
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection