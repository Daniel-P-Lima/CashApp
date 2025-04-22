<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class waste extends Model
{
    protected $fillable = ["name", "cost", "type", "description"];
}
