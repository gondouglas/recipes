<?php

class IngredientController extends MainController{
    
    public function Index(){
        
        $modelo = $this->load_model('ingredient/ingredient-model');
        
        require_once ABSPATH . '/views/ingredient/ingredient-view.php';
    }
}
