<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Earning extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'earnings';
    protected $guarded = false;

    public function types() {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function sources() {
        return $this->belongsTo(Source::class, 'source_id');
    }
}

