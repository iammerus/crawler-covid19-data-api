<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['region', 'name', 'code'];

    public function statistics()
    {
        return $this->hasMany(DailyStatistic::class);
    }
}
