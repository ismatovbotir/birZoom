<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasUuids;
    public $guarded = [];
    protected $casts = [
        'expires_at' => 'datetime',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
