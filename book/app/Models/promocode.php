<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promocode extends Model
{
    use HasFactory;
    protected $table = 'promo_code';
    protected $fillable = ['promo_code','event','start_date','end_date','code_payyment'];
}
