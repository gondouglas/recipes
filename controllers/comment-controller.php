<?php

class CommentController extends MainController {

    public function Index() {

        $modelo = $this->load_model('comment/comment-model');
        
        require ABSPATH . '/views/_includes/header.php';

        require ABSPATH . '/views/_includes/menu.php';

        require_once ABSPATH . '/views/comment/comment-view.php';

        require ABSPATH . '/views/_includes/footer.php';
    }

}
