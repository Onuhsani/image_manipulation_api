<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageManipulation extends Model
{
    use HasFactory;

    protected $guarded = [];

    const TYPE_RESIZE = 'resize';

    const UPDATED_AT = null;
}
