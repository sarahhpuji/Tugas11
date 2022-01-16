<?php

namespace App\Models;

use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;

class Product extends Model{

    use ProdukAttributes, ProdukRelations;
    
    protected $table = 'Product';

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'berat' => 'decimal:2'
    ];   
}
