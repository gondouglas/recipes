<?php

class UnitMeasureController extends MainController {

    public function Index() {

        $modelo = $this->load_model('unitmeasure/unitmeasure-model');

        require ABSPATH . '/views/_includes/header.php';

        require ABSPATH . '/views/_includes/menu.php';

        require_once ABSPATH . '/views/unitmeasure/unitmeasure-view.php';

        require ABSPATH . '/views/_includes/footer.php';
    }

    public function Create() {

        $modelo = $this->load_model('unitmeasure/unitmeasure-model');

        require ABSPATH . '/views/_includes/header.php';

        require ABSPATH . '/views/_includes/menu.php';

        require_once ABSPATH . '/views/unitmeasure/unitmeasure-create-view.php';

        require ABSPATH . '/views/_includes/footer.php';
    }

}
