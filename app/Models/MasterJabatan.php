<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterJabatan extends Model
{
    use HasFactory;

    protected $table = 'master_jabatan';
    protected $primaryKey = 'jabatan_id';

    protected $fillable = [
        'jabatan_nama',
        'jabatan_level',
        'jabatan_isdelete'
    ];

    public $timestamps = true;

    public function scopeActive($query)
    {
        $query->where('jabatan_isdelete', '0')->with('success', 'Data berhasil dihapus');
    }
}
