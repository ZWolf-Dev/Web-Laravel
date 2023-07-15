<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    public function products(){
        return $this->hasMany(Product::class);
    }
}
