<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    // Esto es importante para actualizar:
    protected $fillable = ['product', 'price', 'description', 'img', 'slug'];
        /**
 * Get the route key for the model.
 *
 * @return string
 */
 public function getRouteKeyName()
 {
    return 'slug';
 }
}
