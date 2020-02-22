<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionProfile extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'inquiry_date',
    	'inquiry_reference_no',
    	'item_particulars',
        'applicant',
    	'lc_issuing_bank',
    	'beneficiary',
    	'beneficiary_bank',
    	'swift_code',
    	'proforma_invoice_o',
    	'invoice_value',
    	'shipment_date',
    	'part_shipment',
    	'port_of_loading',
    	'port_of_discharge',
    	'tenure_of_upas',
    	'created_by',
    	'updated_by',
    	'deleted_by',
    ];

    protected $dates = [
    	'deleted_at'
    ];

    public function created_by()
    {
    	return $this->belongsTo(User::class, 'created_by', 'id')->withDefault();
    }
}
