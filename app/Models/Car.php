<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasUuids;
    use HasFactory;

    /**
     * @return string[]
     */
    public $protected = [
        'model_name',
        'brand',
        'color',
        'year',
        'release_date',
    ];
}
