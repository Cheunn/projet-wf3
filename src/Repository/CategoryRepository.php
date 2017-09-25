<?php

namespace Repository;

use Entity\Category;

class CategoryRepository extends RepositoryAbstract
{
    /**
     * 
     * @return array
     */
    public function findAll()
    {
        $dbCategories = $this->db->fetchAll('SELECT * FROM category');
        $categories = [];
        
        foreach ($dbCategories as $dbCategory) {
            $categories[] = $this->buildEntity($dbCategory);
        }
        
        return $categories;
    }
    
    
    public function findAllChronique()
    {
        $dbCategoriesByChronique = $this->db->fetchAll('SELECT DISTINCT name FROM category WHERE type_post = "chronique"'); // ICI
        $categoriesByChronique = [];
      
        foreach ($dbCategoriesByChronique as $dbCategoryByChronique) {
            $categoriesByChronique[] = $this->buildEntity2($dbCategoryByChronique);
        }
        
        return $categoriesByChronique;
    }
    
    public function findAllAside()
    {
        $dbCategoriesByChronique = $this->db->fetchAll('SELECT DISTINCT name FROM category WHERE type_post = "chronique"'); // ICI
        $categoriesByChronique = [];
        foreach ($dbCategoriesByChronique as $dbCategoryByChronique) {
            $categoriesByChronique[] = $this->buildEntity2($dbCategoryByChronique);
        }
        return $categoriesByChronique;
    }
    public function findAllAsideAnnonce()
    {
        $dbCategoriesByAbonne = $this->db->fetchAll('SELECT DISTINCT name FROM category WHERE type_post = "annonce"'); // ICI
        $categoriesByAbonne = [];
        foreach ($dbCategoriesByAbonne as $dbCategoryByAbonne) {
            $categoriesByAbonne[] = $this->buildEntity2($dbCategoryByAbonne);
        }
        return $categoriesByAbonne;
    }
    /**
     * 
     * @param string $type
     * @return array 
     */
    public function findByType($type){
        $dbCategoriesTypes = $this->db->fetchAll("SELECT * FROM category WHERE type_post = $type ");
        $categoriesByType = [];
        
        foreach($dbCategoriesTypes as $dbTypes){
            $categoriesByType[] = $this->buildEntity($dbTypes);
        }
        
        return $categoriesByType;
    }
    
    /**
     * 
     * @param int $id
     * @return Category|null
     */
    public function find($id)
    {
        $dbCategory = $this->db->fetchAssoc(
            'SELECT * FROM category WHERE id_category = :id',
            [
                ':id' => $id
            ]
        );
        
        if (!empty($dbCategory)) {
            return $this->buildEntity($dbCategory);
        }
    }

    /**
     * 
     * @param Category $category
     */
    public function save(Category $category)
    {
        $data = [
            'name' => $category->getName(),
            'type_post' => $category->getType_post()
        ];
        
        if ($category->getId_category()) {
            $this->db->update(
                'category',
                $data,
                [
                    'id_category' => $category->getId_category()
                ]
            );
        } else {
            $this->db->insert('category', $data);
            $category->setId_category($this->db->lastInsertId());
        }
    }
    
    /**
     * 
     * @param Category $category
     */
    public function delete(Category $category) 
    {
        $this->db->delete('category', ['id_category' => $category->getId_category()]);
    }
    
    /**
     * 
     * @param array $data
     * @return Category
     */
    private function buildEntity(array $data)
    {
        $category = new Category();
        
        $category
            ->setName($data['name'])
                
            ->setId_category($data['id_category'])
            //->setName($data['name'])
            //->setType_post($data['type_post'])
        ;
        
        return $category;
    }
    
     private function buildEntity2(array $data)
    {
        $category = new Category();
        
        $category
            ->setName($data['name'])
                
          
        ;
        
        return $category;
    }
}
   