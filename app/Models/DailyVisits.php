<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyVisits extends Model
{
    public $timestamps = false;
    protected $fillable = ['date', 'amount'];
}
