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
    
    //*****Methode de Tri: par Tag*******
    
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
    
    
    
        //*****Methode de Tri: Par id de chronique *******
    
    public function findTagByChronique (Chronique $chronique_id_post) {
        
        $query = <<<SQL
SELECT
     c.chronique_id_post AS tagchronique, 
     a.name
FROM tag_has_post c
JOIN tag a ON a.idtag = c.tag_idtag
WHERE c.chronique_id_post = :chronique
;

SQL;
        
//        $dbTags = $this->db->fetchAll(
//                $query,
//                [
//                    ':chronique' => $chronique_id_post->getId_post()
//                ]
//        );
//        
//        $tags = [];

        foreach ($dbTags as $dbTag) {
            $tags[] = $this->buildEntity($dbTag);
        }

        return $tags;
    }
    
    
    
       //*****Methode de Tri: Par type de chronique *******
    
    public function findTagByChroniqueType($type) {
        
        $query = <<<SQL
SELECT
     c.post_type, 
     a.chronique_id_post,
     t.name
FROM chronique c
JOIN tag_has_post a ON a.chronique_id_post  = c.id_post
JOIN tag t  ON t.idtag = a.tag_idtag              
WHERE c.post_type = "chronique"
;

SQL;
        
//        $dbChroniques = $this->db->fetchAll(
//                $query,
//                [
//                    ':idtag' => $tag->getIdTag()
//                ]
//        );
//        
//        $chroniques = [];

        foreach ($dbChroniques as $dbChronique) {
            $chroniques[] = $this->buildEntity($dbChronique);
        }

        return $chroniques;
    }
    
    
    
   //*****une methode de tri avec plusieurs tags(plusieurs chroniques qui sont reliés a plusieurs tag)*********
    
    //
    //
    //
    //
    //
    
    //*********une méthode qui sort les 10 tags les plus utilisés (leur nom et leur id)************
    
    
        public function findTagByUse(Nb $nb) {
        
        $query = <<<SQL

SELECT DISTINCT tag_idtag, count(*) as nb,a.name
FROM `tag_has_post` 

JOIN tag a ON a.idtag = tag_idtag
GROUP BY tag_idtag
LIMIT 10               
;

SQL;
   
        }
    
}