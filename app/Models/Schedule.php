<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function field()
    {
        return $this->belongsTo(Field::class);
    }
    public function schedle()
    {
        return $this->belongsTo(Schedule::class);
    }
}
