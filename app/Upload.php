<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $table = 'uploads';
    protected $guarded = [];

    public function record()
    {
        return $this->belongsTo(Record::class);
    }
}
