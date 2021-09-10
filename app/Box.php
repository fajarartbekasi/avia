<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    protected $table = 'boxs';
    protected $fillable = [
        'nomor_kotak','unit_id'
    ];

    public function unit()
    {
       return $this->belongsTo(Unit::class);
    }
    public function classification()
    {
        return $this->belongsTo(Classification::class);
    }
    public function records()
    {
        return $this->hasMany(Record::class);
    }
}
