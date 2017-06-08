<?php  

namespace App\Traits;

use App\Product;

trait ModelFinder
{
    public function allProducts($filters, $per_page = 9)
    {
       return  Product::orderBy('name')->filter($filters)->paginate($per_page);
    }
}