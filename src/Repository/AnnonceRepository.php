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
    
    public function findLastThree()
    {
        $query = <<<SQL
SELECT 
    a.*
FROM annonce a
ORDER BY post_date
LIMIT 3
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
            ->setCategory_name($data['category_name'])
            //->setCategory($category)
            //->setAuthor($author)
        ;
        
        return $annonce;
    }
    
    /* FONCTION POUR USER */
    
    public function listByUserId($id){
       
        $dbAnnonces = $this->db->fetchAll("SELECT a.*,c.name AS category_name FROM annonce a JOIN category c ON a.category_id_category = c.id_category WHERE member_id_member = $id");
        
        $annonces = [];
        
        foreach ($dbAnnonces as $dbAnnonce) {
            $annonces[] = $this->buildEntity($dbAnnonce);
        }
        
        return $annonces;
   }
}
