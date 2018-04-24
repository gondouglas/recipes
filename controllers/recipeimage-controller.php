<?php

class RecipeImageController extends MainController{
    
    public function Index(){
        
        $modelo = $this->load_model('recipeimage/recipeimage-model');
        
        require_once ABSPATH . '/views/recipeimage/recipeimage-view.php';
    }
}
