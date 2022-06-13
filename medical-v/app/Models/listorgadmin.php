<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listorgadmin extends Model
{
    use HasFactory;
    protected $table = 'org_accounts';
    protected $fillabel = [
        'id_organisasi',
        'nama_organisasi',
        'alamat_organisasi',
        'logo_organisasi',
    ];
    
    protected $hidden;
	protected $primaryKey = 'id_organisasi';
	protected $guarded = [];
	public $timestamps = false;
}
