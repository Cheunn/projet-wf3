<?php

namespace Entity;

class Tag {
    /**
     *
     * @var int 
     */
    private $idtag;
    /**
     *
     * @var string
     */
    private $name;
    
    public function getIdTag() {
        return $this->idtag;
    }

    public function getName() {
        return $this->name;
    }

    public function setIdTag($idtag) {
        $this->idtag = $idtag;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }
    
}