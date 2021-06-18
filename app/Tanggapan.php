<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $fillable = [
        'id_pengaduan','tgl_tanggapan', 'isi_tanggapan', 'id_petugas'
    ];
}
