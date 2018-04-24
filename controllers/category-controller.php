<?php

class CategoryController extends MainController
{
    public function Index(){
        
        $modelo = $this->load_model('category/category-model');
        
        require_once ABSPATH . '/views/category/category-view.php';
    }
}