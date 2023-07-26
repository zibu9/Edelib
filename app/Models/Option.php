<?php

namespace App\Models;

use App\Models\Promotion;
use App\Models\Departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Option extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }

    public function promos()
    {
        return $this->belongsToMany(Promotion::class);
    }
}
