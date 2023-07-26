<?php

namespace App\Models;

use App\Models\Option;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departement extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function options()
    {
        return $this->hasMany(Option::class);
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }
}
