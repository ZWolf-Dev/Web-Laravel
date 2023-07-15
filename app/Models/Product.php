<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamp = true;
    protected $fillable = ['name','info','price','pricesale','saleoff','image','sold','favourite',];

    public function category(){
        return $this->belongsTo(Brand::class);
    }
}
