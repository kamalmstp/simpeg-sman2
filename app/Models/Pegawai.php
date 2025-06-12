<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Pegawai extends Model
{
    //
    protected $table = 'pegawai';
    // add fillable
    protected $fillable = [
        'nama_pegawai',
        'nip',
        'jabatan',
        'golongan',
        'tgl_masuk',
        'status'
    ];
    // add guaded
    protected $guarded = ['id'];
    // add hidden
    protected $hidden = ['created_at', 'updated_at'];

    public function perjalananDinas(): HasMany
    {
        return $this->hasMany(PerjalananDinas::class);
    }

    public function usulPensiun(): HasMany
    {
        return $this->hasMany(UsulPensiun::class);
    }

    public function usulCuti(): HasMany
    {
        return $this->hasMany(UsulCuti::class);
    }

    public function permohonanPegawai(): HasMany
    {
        return $this->hasMany(PermohonanPegawai::class);
    }

    public function perubahanData(): HasMany
    {
        return $this->hasMany(PerubahanData::class);
    }
}
