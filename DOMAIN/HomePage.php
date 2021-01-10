<?php

class HomePage  {

    public function searchDomain($search){
        $value = anteInject($search);
        return $value == "" ? false : true;
    }
    
    public function anteInject($string){
        // for($i = 0; $i < strlen($string); $i++){
        //     substr_replace($string, '', "\'");
        //     substr_replace($string, "", "\"");
        //     substr_replace($string, '', "[");
        //     substr_replace($string, "", "]");
        //     substr_replace($string, '', ")");
        //     substr_replace($string, "", "(");
        //     substr_replace($string, '', "{");
        //     substr_replace($string, "", "}");
        //     substr_replace($string, '', ".");
        //     substr_replace($string, "", ",");
        //     substr_replace($string, '', ";");
        //     substr_replace($string, "", "?");
        //     substr_replace($string, '', "/");
        //     substr_replace($string, "", "!");
        //     substr_replace($string, '', "@");
        //     substr_replace($string, "", "#");
        //     substr_replace($string, '', "%");
        //     substr_replace($string, "", "$");
        //     substr_replace($string, "", "*");
        //     substr_replace($string, '', "=");
        //     substr_replace($string, "", "-");
        //     substr_replace($string, '', "_");
        //     substr_replace($string, "", "+");
        //     substr_replace($string, "", ":");
        //     substr_replace($string, '', "¨");
    
        // }
        return $string;
    }
}

?>