<?php

class CommentController extends MainController{
    
    public function Index(){
        
        $modelo = $this->load_model('comment/comment-model');
        
        require_once ABSPATH . '/views/comment/comment-view.php';
    }
}