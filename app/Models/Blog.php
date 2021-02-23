<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;
    protected $dates=['deleted_at'];
    //public $timestamps = false; // create_at updated_at tidak dipakai

    protected $fillable = ['title', 'description', 'REV_RWA_FY14'];//whitelist
    // protected $guarded = [];//blacklist
}
