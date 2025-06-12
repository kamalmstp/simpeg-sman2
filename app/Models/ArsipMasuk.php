<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArsipMasuk extends Model
{
    //
    protected $table = 'arsip_masuk';
    // add fillable
    protected $fillable = [
        'no_surat',
        'tanggal_terima',
        'pengirim',
        'perihal',
        'lampiran',
        'file_surat',
        'qr_code',
        'keterangan'
    ];
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];
}
