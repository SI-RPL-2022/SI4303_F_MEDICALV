<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listvoladmin extends Model
{
    use HasFactory;
    protected $table = 'vol_accounts';
    protected $fillabel = [
        'id_user',
        'nama_user',
        'email',
        'tanggal_lahir',
        'gender',
        'alamat',
        'foto_profil',
    ];
    
    protected $hidden;
	protected $primaryKey = 'id_user';
	protected $guarded = [];
	public $timestamps = false;
}
