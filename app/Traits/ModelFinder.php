<?php  

namespace App\Traits;

use App\Product;

trait ModelFinder
{
    public function allProducts($filters, $per_page=5, $parameter='name')
    {
        return  Product::orderBy($parameter)->filter($filters)->paginate($per_page);
    }
}