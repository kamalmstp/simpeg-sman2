<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class UsulPensiun extends Model
{
    //
    protected $table = 'usul_pensiun';
    // add fillable
    protected $fillable = [
        'pegawai_id',
        'alasan_pensiun',
        'tgl_pengajuan',
        'dokumen_pendukung'
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
