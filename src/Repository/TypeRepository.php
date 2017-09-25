<?php

namespace Repository;

use Entity\Type;

class TypeRepository extends RepositoryAbstract {
    
    /**
     * 
     * @return array
     */
    public function findAll() {
        
        $dbType = $this->db->fetchAll('SELECT * FROM type');
        $type = [];
        
        foreach ($dbType as $dbType) {
            $type[] = $this->buildEntity($dbType);
        }
        
        return $type;
    }
    
      /**
     * 
     * @param int $name
     * @return Type|null
     */
    public function find($id_type) {
        $dbType = $this->db->fetchAssoc(
                'SELECT * FROM type WHERE id_type = :id_type',
                [
                    ':id_type' => $id_type
                ]
        );
        
        if (!empty($dbType)) {
            return $this->buildEntity($dbType);
        }
                
    }
    
    
    
    /**
     * 
     * @param Type $type
     */
    public function save(Type $type) {
        
        $data = [
            'name' => $type->getName()
        ];
        
        if ($type->getId_Type()) {
            $this->db->update(
                    'type',
                    $data,
                    [
                        'id_type' => $type->getId_Type()
                    ]
            );
        } else {
            $this->db->insert('type', $data);
            $type->setId_Type($this->db->lastInsertId());
        }
        
    }
    
    
      /**
     * 
     * @param Type $type
     */
        
           public function delete(Type $type) {
        $this->db->delete('type', ['id_type' => $type->getId_Type()]);
    
  
    }
    
    /**
     * 
     * @param array $data
     * @return Type
     */
    private function buildEntity(array $data) {
        
        $type = new Type();
        
        $type
                ->setId_Type($data['id_type'])
                ->setName($data['name']);
        
        return $type;
    }
      
    
    
    //*****Recuperer toutes les annonces selon le Type***********
      public function findTypeByAnnonces (Annonce $annonce_id_post) {
        
        $query = <<<SQL
SELECT
c.*, 
a.name
FROM annonce c
JOIN type a ON a.id_type = c.type_id_type
WHERE a.id_type = :type_id_type
;

SQL;
    
    }


}
