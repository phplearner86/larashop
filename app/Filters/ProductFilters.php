<?php  

namespace App\Filters;

use App\Category;
use App\Group;

class ProductFilters extends Filters
{
    protected $filters = ['group', 'category'];

    protected function group($name)
    {
        $group = Group::whereName($name)->firstOrFail();
        $products = $this->builder->where('group_id', $group->id);

        return $products->count() ? $products : "";
    }

     protected function category($name)
    {
        $category = Category::whereName($name)->firstOrFail();
        $products = $this->builder->$category->products;

        return $products->count() ? $products : "";
    }

}