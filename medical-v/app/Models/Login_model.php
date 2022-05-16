<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login_model extends Model
{
	use HasFactory;
	protected $table = 'org_accounts';
	protected $primaryKey = 'id_organisasi';
	protected $guarded = [];
	public $timestamps = false;
}
