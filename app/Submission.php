<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    //
    protected $table = "submission";

    protected $fillable = ['direktorat','divisi', 'bagian', 'uraian_tugas', 'kompetensi', 'tema_pelatihan'];
}
