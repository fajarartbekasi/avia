<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table = 'records';
    protected $fillable = [
        'tgl_doc','jumlah_lembar'
    ];

    public function box()
    {
        return $this->belongsTo(Box::class);
    }
    public function classification()
    {
        return $this->belongsTo(Classification::class);
    }
}
