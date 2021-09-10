<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    protected $table = 'classifications';
    protected $guarded = [];

    public function boxs()
    {
        return $this->hasMany(Box::class);
    }
    public function records()
    {
        return $this->hasMany(Record::class);
    }
}
