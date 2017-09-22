<?php

namespace Entity;

class Type {
    /**
     *
     * @var int 
     */
    private $id_type;
    /**
     *
     * @var string
     */
    private $name;
    
    public function getId_Type() {
        return $this->id_type;
    }

    public function getName() {
        return $this->name;
    }

    public function setId_Type($id_type) {
        $this->id_type = $id_type;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    
}
