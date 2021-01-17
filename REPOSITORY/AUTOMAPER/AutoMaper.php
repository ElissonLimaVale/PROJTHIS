<?php
class AutoMaper {

    public function __construct(){
        //Construtor
    }
    public function Map($classin, $classout){
        foreach($classin as $key => $value){
            $classout->$key = $value;
        }
        return $classout;
    }
}
?>