<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'submission';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['direktorat','divisi', 'bagian', 'uraian_tugas', 'kompetensi', 'sasaran', 'target_peserta', 'tempat_penyelenggaraan', 'tanggal_penyelenggaraan', 'jumlah_peserta', 'durasi', 'tema_pelatihan', 'file_proposal'];
}
