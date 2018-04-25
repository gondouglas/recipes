<?php

class MethodPreparationController extends MainController {

    public function Index() {

        $modelo = $this->load_model('methodpreparation-model');

        require ABSPATH . '/views/_includes/header.php';

        require ABSPATH . '/views/_includes/menu.php';

        require_once ABSPATH . '/views/methodpreparation/methodpreparation-view.php';

        require ABSPATH . '/views/_includes/footer.php';
    }

}
