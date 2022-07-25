<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxReturn extends Model
{
    use HasFactory;

    protected $fillable = [
        'trx_borrows_id'
    ];

    public function trxBorrow()
    {
        return $this->belongsTo(TrxBorrow::class,'trx_borrows_id', 'id');
    }
}
