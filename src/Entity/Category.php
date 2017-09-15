<?php
namespace Entity;

class Category
{
    /**
     *
     * @var int
     */
    private $id_category;
    
    /**
     *
     * @var string
     */
    private $name;
    
    /**
     *
     * @var string
     */
    private $type_post;
    

    public function getId_category() {
        return $this->id_category;
    }

    public function getName() {
        return $this->name;
    }

    public function getType_post() {
        return $this->type_post;
    }

    public function setId_category($id_category) {
        $this->id_category = $id_category;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setType_post($type_post) {
        $this->type_post = $type_post;
        return $this;
    }


}
