<?php
namespace Entity;

class Message
{
  
    /**
     * @var int
     */
    private $idmessage;
    
      /**
     * @var int
     */
    private $id_post;
    
    
      /**
     * @var int
     */
    private $id_member_send;
    
    
      /**
     * @var int
     */
    private $id_member_receive;
    
      /**
     * @var string 
     */
    private $date ;
    /**
     * @var string 
     */
    private $title = 'title defaut';
    
    /**
     * @var string
     */
    private $content = '';
    
    /**
     *
     * @var User 
     */
    private $sender;
    
    public function getSender() {
        return $this->sender;
    }
    
    public function getSenderName()
    {
        if (!empty($this->sender)) {
            return $this->sender->getName();
        }
        
        return '';
    }

    public function setSender(User $sender) {
        $this->sender = $sender;
        return $this;
    }

    /*    
     public function getUserName() {
         return $this->user->getName();
     }

     
     public function setUser( User $user) {
         $this->user = $user;
         return $this;
     }
*/
         public function getIdmessage() {
        return $this->idmessage;
    }

    public function getId_post() {
        return $this->id_post;
    }

    public function getId_member_send() {
        return $this->id_member_send;
    }

    public function getId_member_receive() {
        return $this->id_member_receive;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function setIdmessage($idmessage) {
        $this->idmessage = $idmessage;
        return $this;
    }

    public function setId_post($id_post) {
        $this->id_post = $id_post;
        return $this;
    }

    public function setId_member_send($id_member_send) {
        $this->id_member_send = $id_member_send;
        return $this;
    }

    public function setId_member_receive($id_member_receive) {
        $this->id_member_receive = $id_member_receive;
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

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
        return $this;
    }


 
    
}
