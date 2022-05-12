<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'types';
    protected $guarded = false;

    public function earnings() {
        return $this->hasMany(Earning::class);
    }

    public function spendings() {
        return $this->hasMany(Spending::class);
    }
}
