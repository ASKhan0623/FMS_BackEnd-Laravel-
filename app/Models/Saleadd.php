<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saleadd extends Model
{
    protected $table = '_sale_add';
    protected $primarykey = 'id';
    protected $fillable = [
        'customer',
        'company',
        'biller',
        'otax',
        'odiscount',
        'discount',
        'sstatus',
        'pstatus',
        'salenote',
        'staffnote',
    ];
    use HasFactory;
}