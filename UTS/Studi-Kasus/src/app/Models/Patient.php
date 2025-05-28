<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';
    protected $fillable = [
        'name',
        'jenis_kelamin',
        'nomor_telepon',
        'nomor_identitas',
    ];
    //
}
