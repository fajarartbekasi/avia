<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table = 'records';
    protected $guarded = [];

    public function box()
    {
        return $this->belongsTo(Box::class);
    }
    public function classification()
    {
        return $this->belongsTo(Classification::class);
    }
}
