<?php
namespace Entity;

class Notation
{
   
      /**
     * @var int
     */
    private $id_member_noteur;
    
    
      /**
     * @var int
     */
    private $member_id_note;
    
      /**
     * @var string 
     */
    private $note ;
    /**
     * @var string 
     */
    private $comment ;
    
    /**
     * @var string
     */
    private $date_create ;
    


    public function getId_member_noteur() {
        return $this->id_member_noteur;
    }

    public function getMember_id_note() {
        return $this->member_id_note;
    }

    public function getNote() {
        return $this->note;
    }

    public function getComment() {
        return $this->comment;
    }

    public function getDate_create() {
        return $this->date_create;
    }

    public function setId_member_noteur($id_member_noteur) {
        $this->id_member_noteur = $id_member_noteur;
        return $this;
    }

    public function setMember_id_note($member_id_note) {
        $this->member_id_note = $member_id_note;
        return $this;
    }

    public function setNote($note) {
        $this->note = $note;
        return $this;
    }

    public function setComment($comment) {
        $this->comment = $comment;
        return $this;
    }

    public function setDate_create($date_create) {
        $this->date_create = $date_create;
        return $this;
    }


 
    
}
