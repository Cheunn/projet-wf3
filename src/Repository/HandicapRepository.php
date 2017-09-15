<?php

namespace Repository;

use Entity\Handicap;

class HandicapRepository extends RepositoryAbstract {
    
    /**
     * 
     * @return array
     */
    public function findAll() {
        
        $dbHandicap = $this->db->fetchAll('SELECT * FROM handicap');
        $handicap = [];
        
        foreach ($dbHandicap as $dbHandicap) {
            $handicap[] = $this->buildEntity($dbHandicap);
        }
        
        return $handicap;
    }
    
      /**
     * 
     * @param int $name
     * @return Handicap|null
     */
    public function find($id) {
        $dbHandicap = $this->db->fetchAssoc(
                'SELECT * FROM handicap WHERE id = :id',
                [
                    ':id' => $id
                ]
        );
        
        if (!empty($dbHandicap)) {
            return $this->buildEntity($dbHandicap);
        }
                
    }
    
    
    
    /**
     * 
     * @param Handicap $handicap
     */
    public function save(Handicap $handicap) {
        
        $data = [
            'name' => $handicap->getName()
        ];
        
        if ($handicap->getId()) {
            $this->db->update(
                    'handicap',
                    $data,
                    [
                        'id' => $handicap->getId()
                    ]
            );
        } else {
            $this->db->insert('handicap', $data);
            $handicap->setId($this->db->lastInsertId());
        }
        
    }
    
    
      /**
     * 
     * @param Handicap $handicap
     */
//    public function delete(Handicap $handicap) {
//        $this->db->delete('handicap', ['handicap' => $handicap->getHandicap()]);
    
        
           public function delete(Handicap $handicap) {
        $this->db->delete('handicap', ['id' => $handicap->getId()]);
    
  
    }
    
    /**
     * 
     * @param array $data
     * @return Handicap
     */
    private function buildEntity(array $data) {
        
        $handicap = new Handicap();
        
        $handicap
                ->setId($data['id'])
                ->setName($data['name']);
        
        return $handicap;
    }
      
    
}