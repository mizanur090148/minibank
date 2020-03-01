<?php

namespace App\Repositories;
use App\Models\TransactionProfile;
use App\Models\User;

class TransactionProfileRepository implements TransactionProfileRepositoryInterface
{
	public function all(array $with, $search_key, $orderByColumn, $orderDirection)
	{
		$query = TransactionProfile::with($with)		
			->orderBy($orderByColumn, $orderDirection);

		// for search
		$query->when($search_key != null, function($q) use ($search_key) {
			$q->where('id', 'like', '%' . '5' . '%');
			$q->orWhere('inquiry_date', 'like', '%' . $search_key . '%');
	    	$q->orWhere('inquiry_reference_no', 'like', '%' . $search_key . '%');
	    	$q->orWhere('item_particulars', 'like', '%' . $search_key . '%');
	        $q->orWhere('applicant', 'like', '%' . $search_key . '%');
	    	$q->orWhere('lc_issuing_bank', 'like', '%' . $search_key . '%');
	    	$q->orWhere('beneficiary', 'like', '%' . $search_key . '%');
	    	$q->orWhere('beneficiary_bank', 'like', '%' . $search_key . '%');
	    	$q->orWhere('swift_code', 'like', '%' . $search_key . '%');
	    	$q->orWhere('proforma_invoice_no', 'like', '%' . $search_key . '%');
	    	$q->orWhere('invoice_value', 'like', '%' . $search_key . '%');
	    	$q->orWhere('shipment_date', 'like', '%' . $search_key . '%');
	    	$q->orWhere('part_shipment', 'like', '%' . $search_key . '%');
	    	$q->orWhere('port_of_loading', 'like', '%' . $search_key . '%');
	    	$q->orWhere('port_of_discharge', 'like', '%' . $search_key . '%');
	    	$q->orWhere('tenure_of_upas', 'like', '%' . $search_key . '%');
		});
		$result = $query->paginate();
		
		return $result;
	}

	public function show($id)
	{
		return TransactionProfile::findOrFail($id);
	}

	public function store(array $input)
	{
		return TransactionProfile::create($input);
	}

	public function update($id, array $input)
	{
		return TransactionProfile::findOrFail($id)->update($input);
	}

	public function search($q)
	{
		return TransactionProfile::where('name', 'like', 'like', '%'. $q .'%')->paginate();
	}

	public function destroy($id)
    {
    	return TransactionProfile::destroy($id);
    }   
	
}