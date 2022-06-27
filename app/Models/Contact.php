<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($val) => Carbon::parse($val)->diffForHumans(),
        );
    }
}
