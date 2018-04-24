<?php

class MethodPreparationController extends MainController{
    
    public function Index(){
        
        $modelo = $this->load_model('methodpreparation-model');
        
        require_once ABSPATH . '/views/methodpreparation/methodpreparation-view.php';
    }
}