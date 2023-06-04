<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Part extends Model
{
    use HasFactory;

    public function brand(): HasOne
    {
        return $this->hasOne(Brand::class);
    }

    public function company(): HasOne
    {
        return $this->hasOne(Company::class);
    }
}
