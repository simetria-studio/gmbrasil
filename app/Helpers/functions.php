<?php

if(!function_exists('getCategories')){
    function getCategories(){
        $categories = App\Models\Category::whereNull('parent_id')->with(['subCategories'])->get();

        return $categories;
    }
}
