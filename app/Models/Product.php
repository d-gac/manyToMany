<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
    public static function modelMethod()
    {
        return 'co się tu wyprawia?';
    }
    public function modelObjectMethod($var)
    {
        return 'xddd - '.$var;
    }
}
