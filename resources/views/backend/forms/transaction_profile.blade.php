@extends('backend.layout')
@section('content')
 <div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
   {{--  <span class="text-uppercase page-subtitle">Overview</span> --}}
    <h3 class="page-title">Transaction Profile(UPAS)</h3>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="card card-small mb-4">
      <div class="card-header border-bottom">
        <h6 class="m-0 font-weight-bold">New Transaction Profile(UPAS)</h6>
      </div>
      <div class="card-body card-block">
        {!! Form::model($transaction_profile, ['url' => $transaction_profile ? 'transaction-profiles/'. $transaction_profile->id : 'transaction-profiles', 'method' => $transaction_profile ? 'PUT' : 'POST']) !!}
          <div class="row form-group" style="margin: 0px !important">
            <div class="col-4">
              <div class="form-group">
                <label for="first-name" class=" form-control-label font-weight-bold">Inquiry Date</label>
                {!! Form::date('inquiry_date', null, ['class'=> 'form-control', 'placeholder' => 'Enter Inquiry Date']) !!}
                @if($errors->has('inquiry_date'))
                  <span class="text-danger">{{ $errors->first('inquiry_date') }}</span>
                 @endif
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="first-name" class=" form-control-label font-weight-bold">Inquiry Reference No.</label>
                {!! Form::text('inquiry_reference_no', null, ['class'=> 'form-control', 'placeholder' => 'Enter Inquiry Reference No.']) !!}
                @if($errors->has('inquiry_reference_no'))
                  <span class="text-danger">{{ $errors->first('inquiry_reference_no') }}</span>
                @endif
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="last-name" class=" form-control-label font-weight-bold">Item Particulars</label>
                {!! Form::text('item_particulars', null, ['class'=> 'form-control', 'placeholder' => 'Enter Item Particulars']) !!}
                @if($errors->has('item_particulars'))
                  <span class="text-danger">{{ $errors->first('item_particulars') }}</span>
                @endif
              </div>
            </div>          
          </div>
          <div class="row form-group" style="margin: 0px !important">
            <div class="col-4">
              <div class="form-group">
                <label for="screen_name" class=" form-control-label font-weight-bold">Applicant</label>
                {!! Form::text('applicant', null, ['class'=> 'form-control', 'placeholder' => 'Enter Applicant']) !!}
                @if($errors->has('applicant'))
                  <span class="text-danger">{{ $errors->first('applicant') }}</span>
                @endif
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="email" class=" form-control-label font-weight-bold">L/C Issuing Bank</label>
                {!! Form::text('lc_issuing_bank', null, ['class'=> 'form-control', 'placeholder' => 'Enter L/C Issuing Bank']) !!}
                @if($errors->has('lc_issuing_bank'))
                  <span class="text-danger">{{ $errors->first('lc_issuing_bank') }}</span>
                @endif
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="phone-no" class=" form-control-label font-weight-bold">Beneficiary</label>
                {!! Form::text('beneficiary', null, ['class'=> 'form-control', 'placeholder' => 'Enter Beneficiary']) !!} 
                @if($errors->has('beneficiary'))
                  <span class="text-danger">{{ $errors->first('beneficiary') }}</span>
                @endif       
              </div>
            </div>          
          </div>
          <div class="row form-group" style="margin: 0px !important">
            <div class="col-4">
              <div class="form-group">
                <label for="phone-no" class=" form-control-label font-weight-bold">Beneficiary Bank</label>
                {!! Form::text('beneficiary_bank', null, ['class'=> 'form-control', 'placeholder' => 'Enter Beneficiary Bank']) !!}   
                @if($errors->has('beneficiary_bank'))
                  <span class="text-danger">{{ $errors->first('beneficiary_bank') }}</span>
                @endif
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="postal-code" class=" form-control-label font-weight-bold">Swift Code</label>
                {!! Form::text('swift_code', null, ['class'=> 'form-control', 'placeholder' => 'Enter Swift Code']) !!}
                @if($errors->has('swift_code'))
                  <span class="text-danger">{{ $errors->first('swift_code') }}</span>
                @endif        
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="postal-code" class=" form-control-label font-weight-bold">Proforma Invoice No.</label>
                {!! Form::text('proforma_invoice_no', null, ['class'=> 'form-control', 'placeholder' => 'Enter Proforma Invoice No']) !!}
                @if($errors->has('proforma_invoice_no'))
                  <span class="text-danger">{{ $errors->first('proforma_invoice_no') }}</span>
                @endif
              </div>
            </div>          
          </div>
          <div class="row form-group" style="margin: 0px !important">
            <div class="col-4">
              <div class="form-group">
                <label for="postal-code" class=" form-control-label font-weight-bold">Invoice Value</label>
                {!! Form::text('invoice_value', null, ['class'=> 'form-control', 'placeholder' => 'Enter Invoice Value']) !!}
                @if($errors->has('invoice_value'))
                  <span class="text-danger">{{ $errors->first('invoice_value') }}</span>
                @endif        
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="phone-no" class=" form-control-label font-weight-bold">Shipment date</label>
                {!! Form::date('shipment_date', null, ['class'=> 'form-control', 'placeholder' => 'Enter Shipment date']) !!}
                @if($errors->has('shipment_date'))
                  <span class="text-danger">{{ $errors->first('shipment_date') }}</span>
                @endif
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="phone-no" class=" form-control-label font-weight-bold">Part Shipment</label>
                {!! Form::text('part_shipment', null, ['class'=> 'form-control', 'placeholder' => 'Enter Part Shipment']) !!}
                @if($errors->has('part_shipment'))
                  <span class="text-danger">{{ $errors->first('part_shipment') }}</span>
                @endif            
              </div>
            </div>          
          </div>
          <div class="row form-group" style="padding: 0px !important; margin: 0px !important">
            <div class="col-4">
              <div class="form-group">
                <label for="postal-code" class=" form-control-label font-weight-bold">Port Of Loading</label>
                {!! Form::text('port_of_loading', null, ['class'=> 'form-control', 'placeholder' => 'Enter Port Of Loading']) !!}  
                @if($errors->has('port_of_loading'))
                  <span class="text-danger">{{ $errors->first('port_of_loading') }}</span>
                @endif          
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="postal-code" class=" form-control-label font-weight-bold">Port Of Discharge</label>
                {!! Form::text('port_of_discharge', null, ['class'=> 'form-control', 'placeholder' => 'Enter Port Of Discharge']) !!}
                @if($errors->has('port_of_discharge'))
                  <span class="text-danger">{{ $errors->first('port_of_discharge') }}</span>
                @endif           
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="phone-no" class=" form-control-label font-weight-bold">Tenure Of UPAS</label>
                {!! Form::text('tenure_of_upas', null, ['class'=> 'form-control', 'placeholder' => 'Enter Tenure Of UPAS']) !!} 
                @if($errors->has('tenure_of_upas'))
                  <span class="text-danger">{{ $errors->first('tenure_of_upas') }}</span>
                @endif
              </div>
            </div>
          </div>
          
          <div class="form-group row m-t-md">
            <div class="col-sm-offset-5 col-sm-12 text-center">
              <button type="submit" class="btn btn-success btn-rounded m-b-10 m-l-5">Submit</button>
              <a href="{{ url('/') }}" class="btn btn-danger btn-rounded m-b-10 m-l-5">Reset</a>
            </div>
          </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
@endsection