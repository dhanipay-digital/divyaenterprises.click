<?php

namespace App\Libraries;

use App\Models\Category;
use App\Models\Operator;

class OperatorClass
{
    public function get_operators($category_name){
        $category_name = $category_name == 'mobile' ? 'prepaid':$category_name;
        $category_name = strtoupper($category_name);
        $category = Category::where(['name'=>$category_name])->first(['id']);
        if(isset($category->id)){
            $cat_id = $category->id;
            $operators = Operator::where(['category_id'=>$cat_id,'status'=>1])->get();
            return $operators;
        }else{
            abort(501,"Invalid Category");
        }
    }

}