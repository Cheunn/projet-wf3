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
      
    
    //**********Function save Tag front ***************
    
       public function saveFront (Tag $tag) {
        
        $data = [
            'name' => $tag->geName()
            ];
          
           
        
        if ($tag->getIdTag()) {
            $this->db->insert(
                    'tag_has_post',
                    $data,
                    [
                        'tag_idtag' => $tag->getIdTag()
                    ]
            );
        } 
        
        else {
            $this->db->insert(
                    'tag',
                    $data
            );
            $tag->setIdTag($this->db->lastInsertId());
            
            $this->db->insert(
                        'tag_has_post',
                        $data,
                    [
                        'tag_idtag'=>$tag->getIdTag()
                    ]
            );
            $tag->setIdTag($this->db->lastInsertId());
             
        }
    }
    
    //*****Methode de Tri: find chronique by TAG *******
    
    public function findChroniqueByTag(Tag $tag) {
        
        $query = <<<SQL
SELECT
     c.name, 
     a.chronique_id_post AS id_chronique
FROM tag c
JOIN tag_has_post a ON a.tag_idtag = c.idtag
WHERE a.tag_idtag = :idtag
;

SQL;
        
        $dbChroniques = $this->db->fetchAll(
                $query,
                [
                    ':idtag' => $tag->getIdTag()
                ]
        );
        
        $chroniques = [];

        foreach ($dbChroniques as $dbChronique) {
            $chroniques[] = $this->buildEntity($dbChronique);
        }

        return $chroniques;
    }
    
    
    
}