<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'receiver_id',
    	'sender_id',
    	'amount',
        'transaction_status',
    	'remarks'
    ];

    protected $dates = [
    	'deleted_at'
    ];

    public function receiver()
    {
    	return $this->belongsTo(User::class, 'receiver_id', 'id')->withDefault();
    }

    public function sender()
    {
    	return $this->belongsTo(User::class, 'sender_id', 'id')->withDefault();
    }
}
