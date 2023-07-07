<?php

namespace App\Services;


class ProviderService {

public function start (array $data, $method='minus'){

 if (method_exists($this,$method)){
  return $this->$method($data['a'],$data['b']);  
 }   

throw new \Exception('Method not found',404);

}    


protected function minus( int $a, int $b): int {


return intval ($a-$b);

}


protected function plus( int $a, int $b): int{


    return intval ($a+$b);
    
    }



}
