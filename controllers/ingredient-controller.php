<?php

class IngredientController extends MainController {

    public function Index() {

        $modelo = $this->load_model('ingredient/ingredient-model');

        require ABSPATH . '/views/_includes/header.php';

        require ABSPATH . '/views/_includes/menu.php';

        require_once ABSPATH . '/views/ingredient/ingredient-view.php';

        require ABSPATH . '/views/_includes/footer.php';
    }

}
