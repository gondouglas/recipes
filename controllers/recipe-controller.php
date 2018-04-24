<?php

class RecipeController extends MainController {

    public function Index() {

        $modelo = $this->load_model('recipe/recipe-model');

        require_once ABSPATH . '/views/recipe/recipe-view.php';
    }

    public function Create() {

        $modelo = $this->load_model('recipe/recipe-model');
        
        require_once ABSPATH . '/views/recipe/recipe-create-view.php';
    }

}
