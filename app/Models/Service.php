<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    /**
     * guarded
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * getImageAttribute
     *
     * @param  mixed $image
     * @return void
     */

    public function getImageAttribute($value)
    {
        return asset('storage/assets/layanan/' . $value);
    }

    public function getNameAttribute($value)
    {
        return strtolower($value);
    }
}
