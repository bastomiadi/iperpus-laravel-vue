<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrxBorrowDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'members_id',
        'borrowed_at',
        'due_return_at'
    ];

    public function trxBorrow()
    {
        return $this->belongsTo(TrxBorrow::class,'trx_borrows_id', 'id');
    }
    public function book()
    {
        return $this->belongsTo(Book::class, 'books_id', 'id');
    }

}
