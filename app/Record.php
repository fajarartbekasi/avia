<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table = 'records';
    protected $fillable = [
           'box_id','classification_id',
           'nomor_portagel',
           'nomor_berkas',
           'info_berkas',
           'durasi',
           'jumlah',
           'uraian',
           'aktif' ,
           'in_aktif',
           'tindak_lanjut',
           'media',
           'reg_ska',
           'tgl_doc',
           'jumlah_lembar',
    ];

    public function box()
    {
        return $this->belongsTo(Box::class);
    }
    public function classification()
    {
        return $this->belongsTo(Classification::class);
    }
    public function uploads()
    {
        return $this->hasMany(Upload::class);
    }
}
