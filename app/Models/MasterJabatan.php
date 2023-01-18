<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterJabatan extends Model
{
    protected $table = 'master_jabatan';
    protected $primaryKey = 'id_jabatan';

    protected $fillable = [
        'nama_jabatan',
        'level_jabatan',
        'jabatan_isdelete'
    ];

    public $timestamps = true;

    public function scopeActive($query)
    {
        $query->where('jabatan_isdelete', '0')->with('success', 'Data berhasil dihapus');
    }
}
