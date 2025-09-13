<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasUuids;
    public $guarded = [];
}
