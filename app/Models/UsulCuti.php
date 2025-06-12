<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class UsulCuti extends Model
{
    //
    protected $table = 'usul_cuti';
    // add fillable
    protected $fillable = [
        'pegawai_id',
        'jenis_cuti',
        'tgl_mulai',
        'tgl_selesai',
        'alasan_cuti'
    ];
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];

    public function pegawai(): BelongsTo
    {
        return $this->belongsTo(Pegawai::class, 'pegawai_id');
    }
}
