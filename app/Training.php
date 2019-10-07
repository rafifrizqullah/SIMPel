<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    //
    protected $table = "training";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'direktorat', 'divisi', 'bagian', 'uraian_tugas', 'kompetensi', 'tema_pelatihan', 'sasaran', 'target_peserta', 'tempat_penyelenggaraan', 'tanggal_penyelenggaraan', 'jumlah_peserta', 'durasi', 'uang_saku', 'uang_fasilitator', 'narasumber', 'konsumsi', 'akomodasi', 'file_proposal'
    ];
}
