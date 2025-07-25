<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];
    protected $table = 'categories';
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
