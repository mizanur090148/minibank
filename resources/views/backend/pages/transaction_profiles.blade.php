@extends('backend.layout')
@section('content')
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <h3 class="page-title">Transaction Profiles</h3>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="card card-small mb-4">
        <div class="card-header border-bottom">   
          <div class="row">
            <div class="col-sm-3">       
              <a class="btn btn-sm btn-success" href="{{ url('transaction-profiles/create') }}">
                <i class="glyphicon glyphicon-plus"></i> New Transaction Profile
              </a>      
            </div> 
            <div class="col-sm-6">
            </div>
            <div class="col-sm-3">
              {!! Form::open(['url' => '/transaction-profiles', 'method' => 'get']) !!}
                {!! Form::text('q', request('q') ?? null, ['class' => 'form-control', 'placeholder' => 'Enter search key here', 'width' => '100%']) !!}
              {!! Form::close() !!}
            </div>          
           </div>
        </div>

        <div class="card-body  text-center">
          @include('backend.partials.response_message')

          <table class="reportTable">
            <thead class="bg-light">
              <tr>
                <th>Transaction Profile No.</th>
                <th>Inquiry Date</th>
                <th>Inquiry Ref. No</th>
                <th>Applicant</th>
                <th>L/C Issuing Bank Date</th>
                <th>Beneficiary</th>
                <th>Beneficiary Bank</th>
                <th width="14%">Actions</th>
              </tr>
            </thead>
            <tbody>
              @forelse($transaction_profiles as $tp)
                <tr>
                  <td>{{ str_pad($tp->id, 8, '0', STR_PAD_LEFT) }}</td>
                  <td>{{ $tp->inquiry_date }}</td>
                  <td>{{ $tp->inquiry_reference_no }}</td>
                  <td>{{ $tp->applicant }}</td>
                  <td>{{ $tp->lc_issuing_bank }}</td>
                  <td>{{ $tp->beneficiary }}</td>
                  <td>{{ $tp->beneficiary_bank }}</td>
                  <td>
                    <a href="{{ url('/transaction-profiles/'.$tp->id.'/edit') }}" class="btn btn-sm btn-success">
                      <i class="fa fa-edit"></i>
                    </a>
                    <a href="{{ url('/transaction-profiles/'.$tp->id) }}" class="btn btn-sm btn-primary">
                      <i class="fa fa-eye"></i>
                    </a>
                    <a href="{{ url('/delete-transaction-profiles/'.$tp->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this?');">
                      <i class="fa fa-times"></i>
                    </a>
                  </td>
                </tr>
              @empty
                <tr class="font-weight-bold text-danger tr-height">
                  <td colspan="10">Data not found </td>
                </tr>
              @endforelse
            </tbody>            
          </table>

          {!! $transaction_profiles->render() !!}

        </div>
      </div>
    </div>
  </div>
@endsection