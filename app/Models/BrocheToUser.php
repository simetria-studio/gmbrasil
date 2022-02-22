<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrocheToUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'broche_id',
        'user_id',
    ];
    public function broxes()
    {
        return $this->belongsTo(Broche::class, 'broche_id');
    }
}
