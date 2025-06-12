<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArsipKeluar extends Model
{
    //
    protected $table = 'arsip_keluar';
    // add fillable
    protected $fillable = [
        'no_surat',
        'tanggal_surat',
        'tujuan',
        'perihal',
        'file_surat',
        'qr_code',
        'keterangan'
    ];
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];
}
