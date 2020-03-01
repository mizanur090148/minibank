@extends('backend.layout')
@section('styles')
  <style type="text/css">
    th:first-child, th:nth-child(3)  {
      background: #67de6beb;
      width: 170px;
    }    
    th {
      text-align: left !important;
      padding-left: 10px !important; 
      font-size: 13px !important;
      /*background: #307ad5dd6;*/
    }    
  </style>
@endsection
@section('content')
  <div class="page-header row no-gutters py-4">
   {{--  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <h3 class="page-title">Transaction Profiles</h3>
    </div> --}}
  </div>
  <div class="row">
    <div class="col">
      <div class="card card-small mb-4">
        <div class="card-header border-bottom">   
          <h5 class="align-middle">Transaction Profile Information
            <a href="#" class="float-right noprint" onclick="window.print()"><i class="fa fa-print" aria-hidden="true"></i></a>            
          </h5>
        </div>
        <div class="card-body  text-center">
          @include('backend.partials.response_message')

          <table class="reportTable">
            <tbody>
              <tr>
                <th>Transaction Profile No.</th><th>{{ str_pad($transaction_profile->id, 8, '0', STR_PAD_LEFT) }}</th>
                <th>Inquiry Date</th><th>{{ $transaction_profile->inquiry_date }}</th>               
              </tr>
              <tr>
                <th>Inquiry Reference No.</th><th>{{ $transaction_profile->inquiry_reference_no }}</th>
                <th>Item Particulars</th><th>{{ $transaction_profile->item_particulars }}</th>
              </tr>
              <tr>
                <th>Applicant</th><th>{{ $transaction_profile->applicant }}</th>
                <th>L/C Issuing Bank</th><th>{{ $transaction_profile->lc_issuing_bank }}</th>
              </tr>
              <tr>
                <th>Beneficiary</th><th>{{ $transaction_profile->beneficiary }}</th>
                <th>Beneficiary Bank</th><th>{{ $transaction_profile->beneficiary_bank }}</th>
              </tr>
              <tr>
                <th>Swift Code</th><th>{{ $transaction_profile->swift_code }}</th>
                <th>Proforma Invoice No.</th><th>{{ $transaction_profile->proforma_invoice_no }}</th>
              </tr>
              <tr>
                <th>Invoice Value</th><th>{{ $transaction_profile->invoice_value }}</th>
                <th>Shipment date</th><th>{{ $transaction_profile->shipment_date }}</th>
              </tr>
              <tr>
                <th>Part Shipment</th><th>{{ $transaction_profile->part_shipment }}</th>
                <th>Port Of Loading</th><th>{{ $transaction_profile->port_of_loading }}</th>
              </tr>
               <tr>
                <th>Port Of Discharge</th><th>{{ $transaction_profile->port_of_discharge }}</th>
                <th>Tenure Of UPAS</th><th>{{ $transaction_profile->tenure_of_upas }}</th>
              </tr>
           </tbody>     
          </table>
        
        </div>
      </div>
    </div>
  </div>
@endsection