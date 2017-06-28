<?php  

namespace App\Filters;

use App\Category;
use App\Group;
use App\Product;
use Illuminate\Http\Request;

class ProductFilters extends Filters
{
    protected $filters = ['group', 'category', 'search'];

    protected function group($slug)
    {
        $group = Group::where('slug', $slug)->firstOrFail();
        $products = $this->builder->where('group_id', $group->id);

        return $products->count() ? $products : "";
    }

     protected function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $ids = $category->groups->pluck('id')->toArray();
        //$ids = [] ; 
         // foreach ($groups as $group) {
         //    array_push($ids, $group->id);
         // }
        
        $products = $this->builder->whereIn('group_id', $ids);
        return $products->count() ? $products : "";

    }
}
