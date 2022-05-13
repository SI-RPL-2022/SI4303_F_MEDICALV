<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class campaignadmin extends Model
{
    use HasFactory;

    protected $table = 'campaigns';
    protected $fillabel = [
        'nama_campaign',
        'kategori',
        'org_id',
        'org_name',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'tgl_mulai_campaign',
        'tgl_selesai_campaign',
        'tgl_mulai_pendaftaran',
        'tgl_selesai_pendaftaran',
        'deskripsi',
        'verif_status',
        'campaign_status',
        'poster'
    ];

    protected $hidden;
	protected $primaryKey = 'id';
	protected $guarded = [];
	public $timestamps = false;
}