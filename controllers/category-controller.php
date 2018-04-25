<?php

class CategoryController extends MainController {

    public function Index() {

        $modelo = $this->load_model('category/category-model');

        require ABSPATH . '/views/_includes/header.php';

        require ABSPATH . '/views/_includes/menu.php';

        require_once ABSPATH . '/views/category/category-view.php';

        require ABSPATH . '/views/_includes/footer.php';
    }

    public function Create() {

        $modelo = $this->load_model('category/category-model');

        require ABSPATH . '/views/_includes/header.php';

        require ABSPATH . '/views/_includes/menu.php';

        require_once ABSPATH . '/views/category/category-create-view.php';

        require ABSPATH . '/views/_includes/footer.php';
    }

}
