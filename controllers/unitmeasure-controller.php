<?php

class UnitMeasureController extends MainController{
    
    public function Index(){
        
        $modelo = $this->load_model('unitmeasure/unitmeasure-model');
        
        require_once ABSPATH . '/views/unitmeasure/unitmeasure-view.php';
    }
}
