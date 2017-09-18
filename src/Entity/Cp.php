<?php
namespace Entity;

class Cp
{

    /**
     * @var int
     */
    private $cp;
    
    /**
     * @var string 
     */
    private $ville;
    
    public function getCp() {
        return $this->cp;
    }

    public function getVille() {
        return $this->ville;
    }

    public function setCp($cp) {
        $this->cp = $cp;
        return $this;
    }

    public function setVille($ville) {
        $this->ville = $ville;
        return $this;
    }

        /**
     * 
     * @return string
     */
    public function getFullName()
    {
        return $this->getCp . ' ' . $this->getVille;
    }
}