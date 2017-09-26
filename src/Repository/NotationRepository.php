<?php
namespace Repository;

use Entity\Notation;
use Entity\User;
use Entity\Annonce;

class NotationRepository extends RepositoryAbstract
{
    

    /**
     * 
     * @param Notation $notation
     */
    public function save(Notation $notation) 
    {
            
               $data = [
                'id_member_noteur' => $notation->getId_member_noteur(),
                'id_member_note' => $notation->getId_member_note(),
                 'note' => $notation->getNote(),
                'comment' => $notation->getComment()
                
            ];
               
            $this->db->insert(
                'notation', 
                $data
            );
         

    }
    

    /**
     * 
     * @param array $data
     * @return Notation
     */
    private function buildEntity2(array $data)
    {
        
        $user = new User();
        $user   -> setId_member($data['id_member_noteur'])
                -> setName($data['name'])      ;
        
        $notation = new Notation();
        $notation
            ->setId_member_noteur($data['id_member_noteur'])
            ->setId_member_note($data['id_member_note'])
            ->setNote($data['note'])
            ->setComment($data['comment'])
            ->setDate_create($data['date_create'])
            ->setUser($user)     
        ;
    
        return $notation;
    }
    
        private function buildEntity(array $data)
    {
        
        $notation = new Notation();
        $notation
            ->setId_member_noteur($data['id_member_noteur'])
            ->setId_member_note($data['id_member_note'])
            ->setNote($data['note'])
            ->setComment($data['comment'])
            ->setDate_create($data['date_create'])
      
        ;
    
        return $notation;
    }

        private function buildEntity3(array $data)
    {
        
        $notation = new Notation();
        $notation
            ->setId_member_noteur($data['id_member_noteur'])
            ->setId_member_note($data['id_member_note'])
            ->setNote($data['note'])
            ->setComment($data['comment'])
       
      
        ;
    
        return $notation;
    }


    public function getMyNotations($idreceiver)       
    {
        // dump($idreceiver);
        
        $query = " SELECT * FROM notation  WHERE id_member_receive = " . $idreceiver ;  
       
         $dbNotations = $this->db->fetchAll($query);
        $notations =[];
        
        foreach ($dbNotations as $dbmesage) {
            $notations[] = $this->buildEntity($dbmesage); 
        }
        return $notations;

        if (!empty($dbNotation)) {
            return $this->buildEntity2($dbNotation);
        }
         
      
    }
    
         /**
     * 
     * @param string $email
     * @return Notation|null
     */
    public function getNbNotants($id)
    {
        $notation = new Notation();
        $dbNotation = $this->db->fetchAssoc
        (
            "SELECT count(note)as note FROM notation WHERE id_member_note = :id AND note != ''",
            [
                ':id' => $id
            ]
        );
        return $this->buildEntityNoteEtNbComments($dbNotation);
    }
    
    public function getMyNote($id)
    {
        $notation = new Notation();
        $dbNotation = $this->db->fetchAssoc
        (
            "SELECT AVG(note)as note FROM notation WHERE id_member_note = :id AND note != ''",
            [
                ':id' => $id
            ]
        );
        return $this->buildEntityNoteEtNbComments($dbNotation);
    }
    

    private function buildEntityNoteEtNbComments(array $data)
    {
        $notation = new Notation();
        $notation->setNote($data['note']);
        return $notation;
    }

      public function getMyComments( $idUser)       
    {
     
        $query = "SELECT  n.* , m.name as name  FROM  notation n, member m WHERE   n.id_member_note  = " .$idUser . " AND n.comment != '' AND n.id_member_noteur = m.id_member"; 
        $dbMessages = $this->db->fetchAll($query);
        
        $messages =[];
         //dump($dbMessages);
        foreach ($dbMessages as $dbmesage) { $messages[] = $this->buildEntity2($dbmesage); } 
       
        return $messages;
      
    }
    
        private function buildEntitygetMyComments(array $data)
    {
        
        $notation = new Notation();
        $notation
            ->setId_member_noteur($data['id_member_noteur'])
            ->setId_member_note($data['id_member_note'])
            ->setNote($data['note'])
            ->setComment($data['comment'])
            ->setDate_create($data['date_create'])
      
        ;
    
        return $notation;
    }
    
    public function nbCommentsByUser($id)
    {
        //$annonce = new Annonce();
        $nbCommentsByUser = $this->db->fetchAssoc
        (
            "SELECT count(*) as note FROM notation WHERE `id_member_note` = $id AND comment != '' ", 
            [
                ':id' => $id
            ]
        );
        return $this->buildEntityNoteEtNbComments($nbCommentsByUser);
      
    }
    
    public function nbCommentairesChroniquesFromUser($id)
    {
        //$annonce = new Annonce();
        $nbCommentsFromUser = $this->db->fetchAssoc
        (
            "SELECT count(*) as note  FROM comment_annonce WHERE member_id_member = $id AND comment != '' ", 
            [
                ':id' => $id
            ]
        );
        return $this->buildEntityNoteEtNbComments($nbCommentsFromUser);
    }
    
     public function nbCommentairesAnnoncesFromUser($id)
     {
         $nbCommentsFromUser = $this->db->fetchAssoc
        (
            "SELECT count(*) as note  FROM comment_chronique WHERE member_id_member = $id AND comment  != '' ", 
            [
                ':id' => $id
            ]
        );
 
        return $this->buildEntityNoteEtNbComments($nbCommentsFromUser);
    }
            
    
   
   private function buildEntityCommentsByUser(array $data)
    {
        
        //dump($data); 
        $user = new User();
        $user   -> setId_member($data['id_member'])
                -> setName($data['name'])   
                ;
        //dump($user); die;
        $annonce = new Annonce();
        $annonce    -> setId_post($data['id_post'])
                    -> setPost_title($data['post_title'])      
                    -> setParagraphe_1($data['comment'])
                    -> setPost_date($data['post_date'])
                    -> setParagraphe_2($data['type'])
                ; 
        $notation = new Notation();
        $notation
        
           ->setUser($user) 
           ->setAnnonce($annonce) 
                ;
        return $notation;
    }
    
    public function listeCommentsChroniquesAnnoncesByUser($idUser)       
    {
         //dump($idreceiver);
                $query = <<<SQL
SELECT ann.id_post, ann.post_title , m.id_member,  m.name, com.comment, com.post_date, com.type
FROM `comment_annonce` com, member m, annonce ann
WHERE com.member_id_member = $idUser
AND com.member_id_member = m.id_member
AND com.id_post = ann.id_post
UNION
SELECT chr.id_post , chr.post_title ,  m2.id_member, m2.name, comchr.comment,  comchr.post_date, comchr.type
FROM comment_chronique comchr, member m2 , chronique chr 
WHERE comchr.member_id_member = $idUser
AND  comchr.member_id_member = m2.id_member
AND  comchr.id_post = chr.id_post
SQL;
        
         
       
         $dbMessages = $this->db->fetchAll($query);
        
        $messages =[];
         //dump($dbMessages);
        foreach ($dbMessages as $dbmesage) { $messages[] = $this->buildEntityCommentsByUser($dbmesage); } 
      
        return $messages;
      
    }
    
        public function listeCommentsChroniquesByUser( $idUser)       
    {
        // dump($idreceiver);
                $query = <<<SQL
SELECT chr.id_post , chr.post_title ,  m.id_member, m.name, comchr.comment,  comchr.post_date
FROM comment_chronique comchr, member m , chronique chr 
WHERE comchr.member_id_member = $idUser
AND  comchr.member_id_member = id_member
AND  comchr.id_post = chr.id_post
SQL;
        
         
       
         $dbMessages = $this->db->fetchAll($query);
        
        $messages =[];
         //dump($dbMessages);
        foreach ($dbMessages as $dbmesage) { $messages[] = $this->buildEntityCommentsByUser($dbmesage); } 
        return $messages;
      
    }
    

}


