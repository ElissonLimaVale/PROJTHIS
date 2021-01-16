<?php 
include "../INFRA/Repository/HomePageRepository.php";

class HomePageAppServoce implements IHomePageAppServices
{
    public function search($string){
        if(searchDomain($string)){
            return searchInfra($string);
        }
        return false;
    }
}

?>