<?php
namespace Repository;

use Entity\Annonce;
use Entity\Category;
use Entity\User;

class AnnonceRepository extends RepositoryAbstract
{

    public function findAll()
    {
        $query = <<<SQL
SELECT 
    a.*, c.name 
FROM annonce a
JOIN category c ON a.category_id_category = c.id_category
ORDER BY a.post_date
SQL;
        
        $dbAnnonces = $this->db->fetchAll($query);
        $annonces = [];
        
        foreach ($dbAnnonces as $dbAnnonce) {
            $annonces[] = $this->buildEntity($dbAnnonce);
        }
       
        return $annonces;
    }
    
    public function findByCategory(Category $category)
    {
        $query = <<<SQL
SELECT 
    a.*, c.name 
FROM annonce a
JOIN category c ON a.category_id_category = c.id_category
WHERE a.category_id_category = :id_category
SQL;
        
        $dbAnnonces = $this->db->fetchAll(
            $query,
            [
                ':id_category' => $category->getId_post()
            ]
        );
        $annonces = [];
        
        foreach ($dbAnnonces as $dbAnnonce) {
            $annonces[] = $this->buildEntity($dbAnnonce);
        }
        
        return $annonces;
    }
    

    public function find($id)
    {
        $query = <<<SQL
SELECT 
    a.*, c.name 
FROM annonce a
JOIN category c ON a.category_id_category = c.id_category
WHERE a.id_post = :category_id_category
SQL;
        
        $dbAnnonce = $this->db->fetchAssoc(
            $query,
            [
                ':category_id_category' => $id
            ]
        );
        
        if (!empty($dbAnnonce)) {
            return $this->buildEntity($dbAnnonce);
        }
    }
    
        public function findByIdAnnonce($id)
    {
        $query = <<<SQL
SELECT * 
FROM annonce 
WHERE id_post = :id_post
SQL;
        
        $dbAnnonce = $this->db->fetchAssoc(
            $query,
            [
                ':id_post' => $id
            ]
        );
        
        if (!empty($dbAnnonce)) {
            return $this->buildEntity($dbAnnonce);
        }
    }

  
    public function save(Annonce $annonce)  
    {
        $data = [
            //'post_date' => $annonce->getPost_date(),        
            'paragraphe_1' => $annonce->getParagraphe_1(),
            'paragraphe_2' => $annonce->getParagraphe_2(),
            'post_title' => $annonce->getPost_title(),
            'url_img_1' => $annonce->getUrl_img_1(),
            'url_img_2' => $annonce->getUrl_img_2(),
            'url_img_3' => $annonce->getUrl_img_3(),
            'member_id_member' => $annonce->getMember_id_member(),
            'type_id_type' => $annonce->getType_id_type(),
            'category_id_category' => $annonce->getCategory_id_category()
            //'author_id' => $annonce->getAuthorId()
            ];
                       

      
        if ($annonce->getId_post()) { // update
            $this->db->update(
                'annonce',
                $data,
                [
                    'id_post' => $annonce->getId_post()
                ]
            );
            
        } else { //insert
            $this->db->insert('annonce', $data);
            $annonce->setId_post($this->db->lastInsertId());
          
        }
    }

public function findAllSingle($limit)
    {
        $query = <<<SQL
SELECT 
    a.*
FROM annonce a
ORDER BY id_post DESC
SQL;
        $dbAnnonces = $this->db->fetchAll($query);    
        $annonces = [];
        
        for ($i=0 ; $i < $limit; $i++) {
            $annonces[] = $this->buildEntity($dbAnnonces[$i]);
        }
        return $annonces;
    }
   
public function findLastThree()
    {
        $query = <<<SQL
SELECT 
    a.*
FROM annonce a
ORDER BY id_post DESC
SQL;
        $dbAnnonces = $this->db->fetchAll($query);    
        $annonces = [];

        
        /*for ($i=0 ; $i < $limit; $i++) {
            $annonces[] = $this->buildEntity($dbAnnonces[$i]);
        }*/
        return $annonces;
    }
    
    public function findLastSix()
    {
        $query = <<<SQL
SELECT 
    a.*
FROM annonce a
ORDER BY id_post DESC
LIMIT 6
SQL;
        $dbAnnonces = $this->db->fetchAll($query);
        $annonces = [];
    
        foreach ($dbAnnonces as $dbAnnonce) {
            $annonces[] = $this->buildEntity($dbAnnonce);
        }
        return $annonces;
    }
    
    private function buildEntity(array $data)
        {
    //        $category = new Category();
            
    //        $category// A FINIR
    //            ->setId_category($data['id_category'])
    //            ->setName($data['name'])
    //            ->setType_post('annonce')    
    //                ;
    //        
            //$author = new Member();
            
           /* $author // RESTE A FAIRE
                ->setId($data['author_id'])
                ->setLastname($data['lastname'])
                ->setFirstname($data['firstname'])
            ;*/
            
            $annonce = new Annonce();
            
            $annonce
                ->setPost_date($data['post_date'])
                ->setId_post($data['id_post'])
                ->setParagraphe_1($data['paragraphe_1'])
                ->setParagraphe_2($data['paragraphe_2'])
                ->setPost_title($data['post_title'])
                ->setUrl_img_1($data['url_img_1'])
                ->setUrl_img_2($data['url_img_2'])
                ->setUrl_img_3($data['url_img_3'])
                ->setMember_id_member($data['member_id_member'])
                ->setType_id_type($data['type_id_type'])
                ->setCategory_id_category($data['category_id_category'])
              
                //->setCategory($category)
                //->setAuthor($author)
            ;
            
            return $annonce;
        }
    
  private function buildEntity2(array $data)
   {
       $annonce = new Annonce();
     
       $annonce->setId_post($data['nb_annonces']);
       //dump($annonce);die;
       return $annonce;
   }
   
   
    private function buildEntity3(array $data)
    {
        $user= new User();
        $user
              -> setName($data['nameUser'])
        ; 
        
        $category = new Category();
        $category
              -> setName($data['nameCategory'])
        ;
        $annonce = new Annonce();
                 $annonce
                ->setPost_date($data['post_date'])
                ->setId_post($data['id_post'])
                ->setParagraphe_1($data['paragraphe_1'])
                ->setParagraphe_2($data['paragraphe_2'])
                ->setPost_title($data['post_title'])
                ->setUrl_img_1($data['url_img_1'])
                ->setUrl_img_2($data['url_img_2'])
                ->setUrl_img_3($data['url_img_3'])
                ->setMember_id_member($data['member_id_member'])
                ->setType_id_type($data['type_id_type'])
                ->setCategory_id_category($data['category_id_category'])
               ->setUserName($user)
                ->setCategoryName($category)
                         ;
        return $annonce;
    }
    

    
     public function findByRubrique($category)
    {
$query = <<<SQL
SELECT
    a.*,  
    c.name AS category_name
FROM annonce a
JOIN category c ON a.category_id_category  = c.id_category
WHERE c.name  = :name
SQL;
        $dbAnnonces = $this->db->fetchAll(
            $query,
            [
                ':name' => $category
            ]
        );
        $annonces = [];
        
        foreach ($dbAnnonces as $dbAnnonce) {
            $annonces[] = $this->buildEntity($dbAnnonce);
        }
       
        return $annonces;
    }
  
    
     public function listeAnnoncesByUser( $idUser)       
    {
        
$query = <<<SQL
SELECT m.name as nameUser, t.name as nameCategory, a.* 
FROM annonce a, member m , type t 
WHERE `member_id_member` = $idUser
AND a.member_id_member = m.id_member
AND a.type_id_type = t.id_type
SQL;
      $dbMessages = $this->db->fetchAll($query);
        
        $messages =[];
        foreach ($dbMessages as $dbmesage) { $messages[] = $this->buildEntity3($dbmesage); }    
        return $messages;
      
    }
    
 
    
    public function nbAnnoncesByUser($id)
    {
        $annonce = new Annonce();
        $dbAnnonce = $this->db->fetchAssoc
        (
            'SELECT count(*) as nb_annonces FROM annonce WHERE member_id_member = :id',
            [
                ':id' => $id
            ]
        );
        
        return $this->buildEntity2($dbAnnonce);
      
    }
    
/* FONCTION POUR LE FRONT */

    public function listByUserId($id) {

        $dbAnnonces = $this->db->fetchAll("SELECT a.*,c.name AS category_name FROM annonce a JOIN category c ON a.category_id_category = c.id_category WHERE member_id_member = $id");

        $annonces = [];

        foreach ($dbAnnonces as $dbAnnonce) {
            $annonces[] = $this->buildEntity($dbAnnonce);
        }

        return $annonces;
    }
  
    // FONCTION DELETE
    
       public function delete (Annonce $annonce) {
        $this->db->delete('annonce', ['id_post' => $annonce->getId_post()]);
    
  
    }
    
        public function findLastAnnonce($limit)
    {
        $query = <<<SQL
SELECT 
    a.*
FROM annonce a
ORDER BY id_post DESC
LIMIT $limit
SQL;
        $dbAnnonces = $this->db->fetchAll($query);
        $annonces = [];
    
        foreach ($dbAnnonces as $dbAnnonce) {
            $annonces[] = $this->buildEntity($dbAnnonce);
        }
        return $annonces;
    }
    
}

