<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use HasFactory;
    protected $primaryKey = 'kode_kategori';
    protected $table = 'kategoris';
    protected $fillable = [
        'kategori'
    ];
    protected $hidden;


}