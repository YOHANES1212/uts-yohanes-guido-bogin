<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $fillable = [
        'payer_name',
        'book_id',
        'amount_paid',
        'paid_at'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
