<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';
    protected $guarded = [];

    public function box()
    {
        return $this->belongsTo(Box::class);
    }
    public function record()
    {
        return $this->belongsTo(Record::class);
    }
}
