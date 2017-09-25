<?php
namespace Repository;

use Entity\Chronique;
use Entity\Category;
use Entity\User;
use Service\UserManager;

class ChroniqueRepository extends RepositoryAbstract
{
    /**
     * 
     * @return array
     */
    public function findAll()
    {
        $query = <<<SQL
SELECT 
    ch.*, 
    c.name AS category_name
FROM chronique ch
JOIN category c ON ch.category_id_category = c.id_category
SQL;
        
        $dbChroniques = $this->db->fetchAll($query);
        $chroniques = [];
        
        foreach ($dbChroniques as $dbChronique) {
            $chroniques[] = $this->buildEntity($dbChronique);
        }
        
        return $chroniques;
    }
    
    /**
     * 
     * @return array
     */
    public function findByCategory(Category $category)
    {
        $query = <<<SQL
SELECT 
    ch.*,  
    c.name AS category_name
FROM chronique ch
JOIN category c ON ch.category_id_category  = c.id
WHERE ch.category_id_category = :id_category
SQL;
        
        $dbChroniques = $this->db->fetchAll(
            $query,
            [
                ':id_category' => $category->getId_category()
            ]
        );
        $chroniques = [];
        
        foreach ($dbChroniques as $dbChronique) {
            $chroniques[] = $this->buildEntity($dbChronique);
        }
        
        return $chroniques;
    }
    
   public function findByRubrique($category)
    {
$query = <<<SQL
SELECT
    ch.*,  
    c.name AS category_name
FROM chronique ch
JOIN category c ON ch.category_id_category  = c.id_category
WHERE c.name  = :name
SQL;
        $dbChroniques = $this->db->fetchAll(
            $query,
            [
                ':name' => $category
            ]
        );
        $chroniques = [];
        
        foreach ($dbChroniques as $dbChronique) {
            $chroniques[] = $this->buildEntity($dbChronique);
        }
       
        return $chroniques;
    }
    /**
     * 
     * @param int $id
     * @return Chronique|null
     */
    public function find($id)
    {
        $query = <<<SQL
SELECT
    ch.*, 
    c.name AS category_name
FROM chronique ch
JOIN category c ON ch.category_id_category = c.id_category
WHERE ch.id_post = :id
SQL;
        
        $dbChronique = $this->db->fetchAssoc(
            $query,
            [
                ':id' => $id
            ]
        );
        
        if (!empty($dbChronique)) {
            return $this->buildEntity($dbChronique);
        }
    }
    
    public function findLastTwo()
    {
        $query = <<<SQL
SELECT 
    c.*
FROM chronique c
ORDER BY id_post DESC
LIMIT 2
SQL;
        $dbchroniques = $this->db->fetchAll($query);
        $chroniques = [];
    
        foreach ($dbChroniques as $dbchronique) {
            $chroniques[] = $this->buildEntity($dbchronique);
        }
        return $chroniques;
    }

    /**
     * 
     * @param Chronique $chronique
     */
    public function save(Chronique $chronique)
    {
        $data = [
            'post_title' => $chronique->getPost_title(),
            'post_type' => $chronique->getPost_type(),
            'type' => $chronique->getType(),
            'post_date' => $chronique->getPost_date(),
            'url_img_1' => $chronique->getUrl_img_1(),            
            'url_img_2' => $chronique->getUrl_img_2(),            
            'paragraph_1' => $chronique->getParagraph_1(),            
            'paragraph_2' => $chronique->getParagraph_2(),
            'member_id_member' => $chronique->getMember_id_member(),            
            'category_id_category' => $chronique->getCategory_id_category()



        ];
        
        if ($chronique->getId_post()) { // update
            $this->db->update(
                'chronique',
                $data,
                [
                    'id_post' => $chronique->getId_post()
                ]
            );
        } else { //insert
            $this->db->insert('chronique', $data);
            $chronique->setId_post($this->db->lastInsertId());
        }
    }
    
    /**
     * 
     * @param Chronique $chronique
     */
    public function delete(Chronique $chronique) 
    {
        $this->db->delete('chronique', ['id_post' => $chronique->getId_post()]);
    }
    
    /**
     * 
     * @param array $data
     * @return Chronique
     */
    private function buildEntity(array $data)
    {
        /*
        $category = new Category();
        
        $category
            ->setId_category($data['id_category'])
            ->setName($data['name'])
            ->setType_post($data['type_post'])
        ;
        */
        //$author = new User();
        
        /*$author
            ->setId($data['author_id'])
            ->setLastname($data['lastname'])
            ->setFirstname($data['firstname'])
        ;*/
        
        $chronique = new Chronique();
        
        $chronique
            ->setId_post($data['id_post'])
            ->setPost_title($data['post_title'])
            ->setPost_type($data['post_type'])
            ->setPost_date($data['post_date'])
            ->setType($data['type'])
            ->setUrl_img_1($data['url_img_1'])
            ->setUrl_img_2($data['url_img_2'])
            ->setParagraph_1($data['paragraph_1'])
            ->setParagraph_2($data['paragraph_2'])
            ->setMember_id_member($data['member_id_member'])
            ->setCategory_id_category($data['category_id_category'])
            ->setCategory_name($data['category_name'])
            ;
        
        return $chronique;
    }
    
    /* FONCTION POUR LE FRONT */
    
    public function listByUserId($id){
       
        $dbChroniques = $this->db->fetchAll("SELECT ch.*,c.name AS category_name FROM chronique ch JOIN category c ON ch.category_id_category = c.id_category WHERE member_id_member = $id");
        
        $chroniques = [];
        
        foreach ($dbChroniques as $dbChronique) {
            $chroniques[] = $this->buildEntity($dbChronique);
        }
        
        return $chroniques;
   }
   

   public function listChroniqueAllUsers(){
       $query = <<<SQL
SELECT
    ch.*, 
FROM chronique ch
SQL;
       $dbChroniques = $this->db->fetchAll($query);
       
       $chroniques = [];
       
       foreach($dbChroniques as $dbChronique){
           $chroniques[] = $this->buildEntity($dbChronique);
       }
       
       return $chroniques;
   }
   
   public function ListChroniqueByType($type){
               $query = <<<SQL
SELECT
    ch.*, 
FROM chronique ch
WHERE post_type = :type
SQL;
        $dbChroniques = $this->db->fetchAll($query,
                [
                    ':type' => $type
                ]
        );
        
        $chroniques = [];
        
        foreach($dbChroniques as $dbChronique){
            $chroniques[] = $this->buildEntity($dbChronique);
        }
        
        return $chroniques;
   }
   
   public function ListChroniqueByUserType($userType){
       $dbChroniques = $this->fetchAll("SELECT * FROM chronique WHERE type = $userType");
       
       $chroniques = [];
       
       foreach($dbChroniques as $dbChronique){
            $chroniques[] = $this->buildEntity($dbChronique);
        }
        
        return $chroniques;
       
   }

  
     public function nbChroniquesByUser($id)
    {
        $chronique = new Chronique();
        $dbChronique = $this->db->fetchAssoc
        (
            'SELECT count(*) as nb_chroniques FROM chronique WHERE member_id_member = :id',
            [
                ':id' => $id
            ]
        );
        
       
        return $this->buildEntity2($dbChronique);
      
    }
    
       public function nbNewsByUser($id)
    {
        $news= new Chronique();
        $dbNews = $this->db->fetchAssoc
        (
            'SELECT count(*) as nb_chroniques FROM news WHERE member_id_member = :id',
            [
                ':id' => $id
            ]
        );
        
       
        return $this->buildEntity2($dbNews);
      
    }
    

    private function buildEntity2(array $data)
    {
        $chronique = new Chronique();
      
        $chronique->setId_post($data['nb_chroniques']);
        //dump($chronique);die; 
        return $chronique;
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
       $chronique = new Chronique();

        $chronique
            ->setId_post($data['id_post'])
            ->setPost_title($data['post_title'])
            ->setPost_type($data['post_type'])
            ->setPost_date($data['post_date'])
            ->setType($data['type'])
            ->setUrl_img_1($data['url_img_1'])
            ->setUrl_img_2($data['url_img_2'])
            ->setParagraph_1($data['paragraph_1'])
            ->setParagraph_2($data['paragraph_2'])
            ->setMember_id_member($data['member_id_member'])
            ->setCategory_id_category($data['category_id_category'])
            ->setUserName($user)
            ->setCategoryName($category)
            ;
        
        return $chronique;
    }
    

    
         public function listeChroniquesByUser( $idUser)       
    {
$query = <<<SQL
SELECT m.name as nameUser, cat.name as nameCategory, c.*
FROM chronique c, member m, category cat
where c.member_id_member = $idUser
AND m.id_member = c.member_id_member
AND c.category_id_category = cat.id_category
SQL;
      $dbMessages = $this->db->fetchAll($query);
        
        $messages =[];
        foreach ($dbMessages as $dbmesage) { $messages[] = $this->buildEntity3($dbmesage); } 
        return $messages;
      
    }
    
    
        /*public function listeAnnoncesByUser( $idUser)       
    {
       
        
        $query = " SELECT c.* , m.name FROM chronique c, member m where member_id_member = id_member AND `member_id_member` = " . $idUser ;  
       
         $dbMessages = $this->db->fetchAll($query);
        
        $messages =[];
      
        foreach ($dbMessages as $dbmesage) { $messages[] = $this->buildEntity3($dbmesage); } 

        return $messages;
      
    } */
        private function buildEntity69(array $data)
    {       
        $chronique = new Chronique();

        $chronique
            ->setId_post($data['id_post'])
            ->setPost_title($data['post_title'])
            ->setPost_type($data['post_type'])
            ->setPost_date($data['post_date'])
            ->setType($data['type'])
            ->setUrl_img_1($data['url_img_1'])
            ->setUrl_img_2($data['url_img_2'])
            ->setParagraph_1($data['paragraph_1'])
            ->setParagraph_2($data['paragraph_2'])
            ->setMember_id_member($data['member_id_member'])
            ->setCategory_id_category($data['category_id_category'])
            ;
        
        return $chronique;
    }
    
    public function findLastSix(){
        $query = <<<SQL
SELECT 
    ch.*
FROM chronique ch
WHERE post_type = "chronique"
ORDER BY id_post DESC
LIMIT 6
SQL;
        $dbChroniques = $this->db->fetchAll($query);
        $chroniques = [];
    
        foreach ($dbChroniques as $dbChronique) {
            $chroniques[] = $this->buildEntity69($dbChronique);
        }
        return $chroniques;
   }
   
       public function findLastSixNews(){
        $query = <<<SQL
SELECT 
    ch.*
FROM chronique ch
WHERE post_type = "news"
ORDER BY id_post DESC
LIMIT 6
SQL;
        $dbNews = $this->db->fetchAll($query);
        $news = [];
    
        foreach ($dbNews as $dbNew) {
            $news[] = $this->buildEntity69($dbNew);
        }
        return $news;
   }
}

