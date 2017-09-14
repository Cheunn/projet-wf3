<?php
namespace Entity;

class Article
{
    /**
     *
     * @var int 
     */
    private $id;
    
    /**
     *
     * @var string
     */
    private $title;
    
    /**
     *
     * @var string
     */
    private $content;
    
    /**
     *
     * @var string 
     */
    private $header;
    
    /**
     *
     * @var Category 
     */
    private $category;

    /**
     *
     * @var User
     */
    private $author;

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getHeader() {
        return $this->header;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    public function setHeader($header) {
        $this->header = $header;
        return $this;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory(Category $category) {
        $this->category = $category;
        return $this;
    }
    
    /**
     * 
     * @return string
     */
    public function getCategoryName()
    {
        if (!is_null($this->category)) {
            return $this->category->getName();
        }
        
        return '';
    }
    
    /**
     * 
     * @return int|null
     */
    public function getCategoryId()
    {
        if (!is_null($this->category)) {
            return $this->category->getId();
        }
    }
    
    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor(User $author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * 
     * @return int|null
     */
    public function getAuthorId()
    {
        if (!is_null($this->author)) {
            return $this->author->getId();
        }
    }
    
    /**
     * 
     * @return string
     */
    public function getAuthorName()
    {
        if (!is_null($this->author)) {
            return $this->author->getFullName();
        }
        
        return '';
    }
}
