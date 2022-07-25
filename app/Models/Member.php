<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone'
    ];

    public function trxBorrows()
    {
        return $this->hasMany(TrxBorrow::class, 'members_id','id');
    }

}
