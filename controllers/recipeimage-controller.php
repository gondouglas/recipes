<?php

class RecipeImageController extends MainController {

    public function Index() {

        $modelo = $this->load_model('recipeimage/recipeimage-model');

        require ABSPATH . '/views/_includes/header.php';

        require ABSPATH . '/views/_includes/menu.php';

        require_once ABSPATH . '/views/recipeimage/recipeimage-view.php';
        
        require ABSPATH . '/views/_includes/footer.php';
    }

}
