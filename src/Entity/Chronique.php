<?php
namespace Entity;

class Chronique
{
    /**
     *
     * @var int 
     */
    private $id_post;
    
    /**
     *
     * @var string
     */
    private $post_title;
    
    /**
     *
     * @var string
     */
    private $post_type;
    
    /**
     *
     * @var string 
     */
    private $post_date;
    
    /**
     *
     * @var Category 
     */
    private $type;

    /**
     *
     * @var User
     */
    private $url_img_1;
    
    private $url_img_2;
    
    private $paragraph_1;
    
    private $paragraph_2;
    
    private $member_id_member;
    
    private $category_id_category;
    
    private $category_name;
    private $userName;
    private $categoryName;
    

    public function getId_post() {
        return $this->id_post;
    }

    public function getPost_title() {
        return $this->post_title;
    }

    public function getPost_type() {
        return $this->post_type;
    }

    public function getPost_date() {
        return $this->post_date;
    }

    public function getType() {
        return $this->type;
    }

    public function getUrl_img_1() {
        return $this->url_img_1;
    }

    public function getUrl_img_2() {
        return $this->url_img_2;
    }


    public function getMember_id_member() {
        return $this->member_id_member;
    }

    public function getCategory_id_category() {
        return $this->category_id_category;
    }

    public function setId_post($id_post) {
        $this->id_post = $id_post;
        return $this;
    }

    public function setPost_title($post_title) {
        $this->post_title = $post_title;
        return $this;
    }

    public function setPost_type($post_type) {
        $this->post_type = $post_type;
        return $this;
    }

    public function setPost_date($post_date) {
        $this->post_date = $post_date;
        return $this;
    }

    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    public function setUrl_img_1($url_img_1) {
        $this->url_img_1 = $url_img_1;
        return $this;
    }

    public function setUrl_img_2($url_img_2) {
        $this->url_img_2 = $url_img_2;
        return $this;
    }

    public function setMember_id_member($member_id_member) {
        $this->member_id_member = $member_id_member;
        return $this;
    }

    public function setCategory_id_category($category_id_category) {
        $this->category_id_category = $category_id_category;
        return $this;
    }

        
    /**
     * 
     * @return string
     */
    
    
    public function getParagraph_1() {
        return $this->paragraph_1;
    }

    public function getParagraph_2() {
        return $this->paragraph_2;
    }

    public function setParagraph_1($paragraph_1) {
        $this->paragraph_1 = $paragraph_1;
        return $this;
    }

    public function setParagraph_2($paragraph_2) {
        $this->paragraph_2 = $paragraph_2;
        return $this;
    }

    /**
     * 
     * @return int|null
     */
    public function getCategoryId()
    {
        if (!is_null($this->category)) {
            return $this->category->getId_category();
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

    public function getCategory_name() {
        return $this->category_name;
    }
    
    public function setCategory_name($category_name) {
        $this->category_name = $category_name;
        return $this;
    }


    public function getUserName() {
        return $this->user->getName();
    }

    public function getCategoryName() {
        return $this->category->getName();
    }

    public function setUserName(User $user) {
        $this->user = $user;
        return $this;
    }

    public function setCategoryName(Category $category) {
        $this->category = $category;
        return $this;
    }


    
}
