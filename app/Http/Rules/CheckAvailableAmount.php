<?php

namespace App\Http\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Transaction;

class CheckAvailableAmount implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $amount)
    {
        $transactions = Transaction::where('receiver_id', userId())
            ->orWhere('sender_id', userId())
            ->get();
      
        $total_deposit = $transactions->where('receiver_id', userId())
            ->where('transaction_status', OWN)
            ->sum('amount');

        $total_sent = $transactions->where('sender_id', userId())
            ->where('transaction_status', OTHERS)
            ->sum('amount');

        $current_balance = $total_deposit - $total_sent; 

        return ($current_balance >= $amount) ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Sorry!! You don\'t have available amount.';
    }
}
