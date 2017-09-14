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
        $dbCategories = $this->db->fetchAll('SELECT * FROM category ORDER BY name');
        $categories = [];
        
        foreach ($dbCategories as $dbCategory) {
            $categories[] = $this->buildEntity($dbCategory);
        }
        
        return $categories;
    }
    
    /**
     * 
     * @param int $id
     * @return Category|null
     */
    public function find($id)
    {
        $dbCategory = $this->db->fetchAssoc(
            'SELECT * FROM category WHERE id = :id',
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
            'name' => $category->getName()
        ];
        
        if ($category->getId()) {
            $this->db->update(
                'category',
                $data,
                [
                    'id' => $category->getId()
                ]
            );
        } else {
            $this->db->insert('category', $data);
            $category->setId($this->db->lastInsertId());
        }
    }
    
    /**
     * 
     * @param Category $category
     */
    public function delete(Category $category) 
    {
        $this->db->delete('category', ['id' => $category->getId()]);
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
            ->setId($data['id'])
            ->setName($data['name'])
        ;
        
        return $category;
    }
}
