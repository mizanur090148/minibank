@extends('backend.layout')
@section('styles')
  <style type="text/css">
   
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.css" />
@endsection
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
        <div class="row form-group" style="padding: opx !important; margin: 0px !important">
          <div class="col-4">
            <div class="form-group">
              <label for="first-name" class=" form-control-label font-weight-bold">Inquiry Date</label>
              <input type="text" id="city" class="form-control" name="inquiry_date" placeholder="Enter Inquiry Date">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="first-name" class=" form-control-label font-weight-bold">Inquiry Reference No.</label>
              <input type="text" id="city" class="form-control" name="inquiry_reference_no" placeholder="Enter Inquiry Reference No.">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="last-name" class=" form-control-label font-weight-bold">Item Particulars</label>
              <input type="text" id="postal-code" class="form-control" name="item_particulars" placeholder="Enter Item Particulars">
            </div>
          </div>          
        </div>
        <div class="row form-group" style="padding: opx !important; margin: 0px !important">
          <div class="col-4">
            <div class="form-group">
              <label for="screen_name" class=" form-control-label font-weight-bold">Applicant</label>
              <input type="type" id="screen_name" class="form-control" name="applicant" placeholder="Enter Applicant">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="email" class=" form-control-label font-weight-bold">L/C Issuing Bank</label>
              <input type="type" id="email" class="form-control" name="lc_issuing_bank" placeholder="Enter L/C Issuing Bank">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="phone-no" class=" form-control-label font-weight-bold">Beneficiary</label>
              <input type="text" id="phone-no" class="form-control" name="beneficiary" placeholder="Enter Beneficiary">
            </div>
          </div>          
        </div>
        <div class="row form-group" style="padding: opx !important; margin: 0px !important">
          <div class="col-4">
            <div class="form-group">
              <label for="phone-no" class=" form-control-label font-weight-bold">Beneficiary Bank</label>
              <input type="text" id="phone-no" class="form-control" name="beneficiary_bank" placeholder="Enter Beneficiary Bank">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="postal-code" class=" form-control-label font-weight-bold">Swift Code</label>
              <input type="text" id="postal-code" class="form-control" name="swift_code" placeholder="Enter Swift Code">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="postal-code" class=" form-control-label font-weight-bold">Proforma Invoice No.</label>
              <input type="text" id="postal-code" class="form-control" name="proforma_invoice_o" placeholder="Enter Proforma Invoice No">
            </div>
          </div>          
        </div>
        <div class="row form-group" style="padding: opx !important; margin: 0px !important">
          <div class="col-4">
            <div class="form-group">
              <label for="postal-code" class=" form-control-label font-weight-bold">Invoice Value</label>
              <input type="text" id="postal-code" class="form-control" name="invoice_value" placeholder="Enter Invoice Value">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="phone-no" class=" form-control-label font-weight-bold">Shipment date</label>
              <input type="date" class="form-control" name="shipment_date" placeholder="Enter Shipment date">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="phone-no" class=" form-control-label font-weight-bold">Part Shipment</label>
              <input type="text" class="form-control" name="part_shipment" placeholder="Enter Part Shipment">
            </div>
          </div>          
        </div>
        <div class="row form-group" style="padding: opx !important; margin: 0px !important">
          <div class="col-4">
            <div class="form-group">
              <label for="postal-code" class=" form-control-label font-weight-bold">Port Of Loading</label>
              <input type="text" class="form-control" name="port_of_loading" placeholder="Enter Port Of Loading">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="postal-code" class=" form-control-label font-weight-bold">Port Of Discharge</label>
              <input type="text" class="form-control" name="port_of_discharge" placeholder="Enter Port Of Discharge">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="phone-no" class=" form-control-label font-weight-bold">Tenure Of UPAS</label>
              <input type="text" class="form-control" name="tenure_of_upas" placeholder="Enter Tenure Of UPAS">
            </div>
          </div>
        </div>
        
        <div class="form-group row m-t-md">
          <div class="col-sm-offset-5 col-sm-12 text-center">
            <button type="submit" class="btn btn-success btn-rounded m-b-10 m-l-5">Submit</button>
            <button type="submit" class="btn btn-danger btn-rounded m-b-10 m-l-5">Reset</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
$('.mm').select2();
});
</script>
@endsection