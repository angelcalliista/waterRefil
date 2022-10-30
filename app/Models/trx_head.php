<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trx_head extends Model
{
    use HasFactory;
    protected $table = 'trx_heads';
    protected $primarykey = 'id';
}
