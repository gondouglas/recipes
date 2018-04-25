<?php

class RecipeController extends MainController {

    public function Index() {

        $modelo = $this->load_model('recipe/recipe-model');

        require ABSPATH . '/views/_includes/header.php';

        require ABSPATH . '/views/_includes/menu.php';

        require_once ABSPATH . '/views/recipe/recipe-view.php';

        require ABSPATH . '/views/_includes/footer.php';
    }

    public function Create() {

        $modelo = $this->load_model('recipe/recipe-model');

        require ABSPATH . '/views/_includes/header.php';

        require ABSPATH . '/views/_includes/menu.php';

        require_once ABSPATH . '/views/recipe/recipe-create-view.php';

        require ABSPATH . '/views/_includes/footer.php';
    }

}
