<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolAccount extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'vol_accounts';
    protected $guarded = [];
}
