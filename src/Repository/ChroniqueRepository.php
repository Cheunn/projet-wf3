<?php
namespace Repository;

use Entity\Chronique;
use Entity\Category;
use Entity\User;

class ArticleRepository extends RepositoryAbstract
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
    c.name AS category_name,
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
    c.name AS category_name,
FROM chronique ch
JOIN category c ON ch.category_id_category  = c.id
WHERE ch.category_id_category = :category_id
SQL;
        
        $dbChroniques = $this->db->fetchAll(
            $query,
            [
                ':category_id' => $category->getId_category()
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
     * @return Article|null
     */
    public function find($id)
    {
        $query = <<<SQL
SELECT
    ch.*, 
    c.name AS category_name,
FROM chronique ch
JOIN category c ON a.category_id_category = c.id
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

    /**
     * 
     * @param Chronique $chronique
     */
    public function save(Chronique $chronique)
    {
        $data = [
            'post_title' => $chronique->getPost_title(),
            'post_type' => $chronique->getPost_type(),
            'type' => $chronique->getPost(),
            'post_date' => $chronique->getPost_date(),
            'url_img_1' => $chronique->getUrl_img_1,            
            'url_img_2' => $chronique->getUrl_img_2(),            
            'paragraph_1' => $chronique->getParagraph_1(),            
            'paragraph_2' => $chronique->getParagraph_2(),
            'member_id_member' => $chronique->getMember_id_member(),            
            'category_id_category' => $chronique->getCategory_id_category()



        ];
        
        if ($chronique->getId()) { // update
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
     * @param Article $article
     */
    public function delete(Chronique $chronique) 
    {
        $this->db->delete('chronique', ['id_post' => $chronique->getId_post()]);
    }
    
    /**
     * 
     * @param array $data
     * @return Article
     */
    private function buildEntity(array $data)
    {
        $category = new Category();
        
        $category
            ->setId_category($data['id_category'])
            ->setName($data['name'])
            ->setType_post($data['type_post'])
        ;
        
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
            ->setCategory_id_category($category)
            //->setAuthor($author)
        ;
        
        return $chronique;
    }
}
