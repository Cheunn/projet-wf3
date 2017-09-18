<?php
namespace Entity;

class User
{
    const ROLE_USER = 'user';
    const ROLE_ADMIN = 'admin';
    const ROLE_ASSO = 'asso';
    
    /**
     * @var int
     */
    private $id_member;
    
    /**
     * @var string 
     */
    private $role = 'user';
    
    /**
     * @var string
     */
    private $lastname = '';
    
    /**
     * @var string
     */
    private $firstname = '';
    
     /**
     * @var string
     */
    private $name = '';
    
    /**
     * @var string
     */
    private $pseudo;
    
    
    /**
     * @var string
     */
    private $email;
    
    /**
     * @var string
     */
    private $password;
    
    /**
     * @var int
     */
    private $phone = '';
    
    /**
     * @var string 
     */
    private $civility = '';
    
    /**
     * @var string 
     */
    private $url_img = '';
    
    /**
     * @var string 
     */
    private $is_active = '';
   
        /**
     * @var string 
     */
    private $description = '';
    
        /**
     * @var string 
     */
    private $date_create = '';
    
        /**
     * @var string 
     */
    private $adress = '';
    
        /**
     * @var string 
     */
    private $postal_code = '';
    
    
        /**
     * @var string 
     */
    private $country = '';
    
    
        /**
     * @var string 
     */
    private $town = '';
    
   
            /**
     * @var string 
     */
    private $url_web_orga = '';
    
            /**
     * @var string 
     */
    private $url_fb = '';
    
    public function getId_member() {
        return $this->id_member;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getName() {
        return $this->name;
    }

    public function getPseudo() {
        return $this->pseudo;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getCivility() {
        return $this->civility;
    }

    public function getUrl_img() {
        return $this->url_img;
    }

    public function getIs_active() {
        return $this->is_active;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getDate_create() {
        return $this->date_create;
    }

    public function getAdress() {
        return $this->adress;
    }

    public function getPostal_code() {
        return $this->postal_code;
    }

    public function getCountry() {
        return $this->country;
    }

    public function getTown() {
        return $this->town;
    }

    public function getUrl_web_orga() {
        return $this->url_web_orga;
    }

    public function getUrl_fb() {
        return $this->url_fb;
    }
    
       public function getRole() {
        return $this->role;
    }

    public function setId_member($id_member) {
        $this->id_member = $id_member;
        return $this;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
        return $this;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setPseudo($pseudo) {
        $this->pseudo = $pseudo;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }

    public function setCivility($civility) {
        $this->civility = $civility;
        return $this;
    }

    public function setUrl_img($url_img) {
        $this->url_img = $url_img;
        return $this;
    }

    public function setIs_active($is_active) {
        $this->is_active = $is_active;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function setDate_create($date_create) {
        $this->date_create = $date_create;
        return $this;
    }

    public function setAdress($adress) {
        $this->adress = $adress;
        return $this;
    }

    public function setPostal_code($postal_code) {
        $this->postal_code = $postal_code;
        return $this;
    }

    public function setCountry($country) {
        $this->country = $country;
        return $this;
    }

    public function setTown($town) {
        $this->town = $town;
        return $this;
    }

    public function setUrl_web_orga($url_web_orga) {
        $this->url_web_orga = $url_web_orga;
        return $this;
    }

    public function setUrl_fb($url_fb) {
        $this->url_fb = $url_fb;
        return $this;
    }

    

    public function setRole($role)
    {
        /*   if (!in_array($role, [self::ROLE_USER, self::ROLE_ADMIN, self::ROLE_ASSO])) {  
            throw new \UnexpectedValueException('Unrecognized role value');
        }   */
        
        $this->role = $role;
        
        return $this;
    }
    
    /**
     * 
     * @return string
     */
    public function getFullName()
    {
        // return $this->firstname . ' ' . $this->lastname;
        return $this->name ;
    }
    
    /**
     * 
     * @return bool
     */
    public function isAdmin()
    {
        return $this->role == self::ROLE_ADMIN;
    }
}
