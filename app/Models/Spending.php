<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Spending extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'spendings';
    protected $guarded = false;

    public function tags() {
        return $this->belongsToMany(Tag::class, 'spending_tags');
    }

    public function types() {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function categories() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
