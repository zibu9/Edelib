<?php

namespace App\Models;

use App\Models\Option;
use App\Models\Departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promotion extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function departements()
    {
        return $this->belongsToMany(Departement::class);
    }

    public function option()
    {
        return $this->belongsTo(Option::class);
    }

    public function promos()
    {
        return $this->belongsToMany(Option::class);
    }
}
