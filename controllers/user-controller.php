<?php

class UserController extends MainController{
    
    public function Index(){
        
        $modelo = $this->load_model('user/user-model');
        
        require_once ABSPATH . '/views/user/user-view.php';
    }
}

