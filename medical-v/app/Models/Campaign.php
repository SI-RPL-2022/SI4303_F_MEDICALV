<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function user(){
        return $this->hasMany(User::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class,'campaign_favorits');
    }
}