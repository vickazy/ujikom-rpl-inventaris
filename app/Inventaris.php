<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventaris extends Model
{
    use SoftDeletes;

    protected $primaryKey = "id_inventaris";

    public function jenis()
    {
        return $this->belongsTo("App\Jenis", "id_jenis", "id_jenis");
    }

    public function ruang()
    {
        return $this->belongsTo("App\Ruang", "id_ruang", "id_ruang");
    }

    public function petugas()
    {
        return $this->belongsTo("App\Petugas", "id_petugas", "id_petugas");
    }

    public function detailPinjam()
    {
        return $this->hasMany("App\DetailPinjam", "id_inventaris", $this->primaryKey);
    }
}
