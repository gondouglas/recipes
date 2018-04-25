<?php

class UserController extends MainController {

    public function Index() {

        $modelo = $this->load_model('user/user-model');

        require ABSPATH . '/views/_includes/header.php';

        require ABSPATH . '/views/_includes/menu.php';

        require_once ABSPATH . '/views/user/user-view.php';

        require ABSPATH . '/views/_includes/footer.php';
    }

    public function Create() {

        $modelo = $this->load_model('user/user-model');

        require ABSPATH . '/views/_includes/header.php';

        require ABSPATH . '/views/_includes/menu.php';

        require_once ABSPATH . '/views/user/user-create-view.php';

        require ABSPATH . '/views/_includes/footer.php';
    }

}
