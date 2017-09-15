<?php

namespace Repository;

use Entity\Tag;

class TagRepository extends RepositoryAbstract {
    
    /**
     * 
     * @return array
     */
    public function findAll() {
        
        $dbTag = $this->db->fetchAll('SELECT * FROM tag');
        $tag = [];
        
        foreach ($dbTag as $dbTag) {
            $tag[] = $this->buildEntity($dbTag);
        }
        
        return $tag;
    }
    
      /**
     * 
     * @param int $name
     * @return Tag|null
     */
    public function find($idtag) {
        $dbTag = $this->db->fetchAssoc(
                'SELECT * FROM tag WHERE idtag = :idtag',
                [
                    ':idtag' => $idtag
                ]
        );
        
        if (!empty($dbTag)) {
            return $this->buildEntity($dbTag);
        }
                
    }
    
    
    
    /**
     * 
     * @param Tag $tag
     */
    public function save(Tag $tag) {
        
        $data = [
            'name' => $tag->getName()
        ];
        
        if ($tag->getIdTag()) {
            $this->db->update(
                    'tag',
                    $data,
                    [
                        'idtag' => $tag->getIdTag()
                    ]
            );
        } else {
            $this->db->insert('tag', $data);
            $tag->setIdTag($this->db->lastInsertId());//LastInsertId fonctuion DBAL
        }
        
    }
    
    
      /**
     * 
     * @param Tag $tag
     */
//    public function delete(Tag $tag) {
//        $this->db->delete('tag', ['tag' => $tag->getTag()]);
    
        
           public function delete(Tag $tag) {
        $this->db->delete('tag', ['idtag' => $tag->getIdTag()]);
    
  
    }
    
    /**
     * 
     * @param array $data
     * @return Tag
     */
    private function buildEntity(array $data) {
        
        $tag = new Tag();
        
        $tag
                ->setIdTag($data['idtag'])
                ->setName($data['name']);
        
        return $tag;
    }
      
    
}