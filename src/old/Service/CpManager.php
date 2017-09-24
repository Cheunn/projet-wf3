<?php
namespace Service;

use Entity\Cp;
use Symfony\Component\HttpFoundation\Session\Session;

class CpManager
{
    
    /**
     * 
     * @return array
     */
    public function getVille()
    {
       
            return $this->getCp()->getFullName();
 
        
    }
    

}
