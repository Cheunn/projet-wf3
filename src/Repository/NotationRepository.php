<?php
namespace Repository;

use Entity\Notation;

class NotationRepository extends RepositoryAbstract
{
    
   
   
    
   
    /**
     * 
     * @param Notation $notation
     */
    public function save(Notation $notation) 
    {

               $data = [
                'id_member_noteur' => $notation->getId_member_noteur(),
                'id_member_note' => $notation->getId_member_note(),
                 'note' => $notation->getNote(),
                'comment' => $notation->getComment(),
                 'date_create' => $notation->getDate_create()
            ];

            $this->db->insert(
                'notation', 
                $data
            );
            $notation->setId_notation($this->db->lastInsertId());

    }
    

    /**
     * 
     * @param array $data
     * @return Notation
     */
    private function buildEntity(array $data)
    {
        $notation = new Notation();
      
        $notation
            ->setId_member_noteur($data['id_member_noteur'])
            ->setId_member_note($data['id_member_note'])
            ->setNote($data['note'])
            ->setComment($data['comment'])
            ->setDate_create($data['date_create'])
        ;
    
        return $notation;
    }



    public function getMyNotations($idreceiver)       
    {
        // dump($idreceiver);
        
        $query = " SELECT * FROM notation  WHERE id_member_receive = " . $idreceiver ;  
       
         $dbNotations = $this->db->fetchAll($query);
        $notations =[];
        
        foreach ($dbNotations as $dbmesage) {
            $notations[] = $this->buildEntity($dbmesage); 
        }
        return $notations;

        if (!empty($dbNotation)) {
            return $this->buildEntity($dbNotation);
        }
         
      
    }
    
         /**
     * 
     * @param string $email
     * @return Notation|null
     */
    public function getMyNote($id)
    {
        $notation = new Notation();
        $dbNotation = $this->db->fetchAssoc
        (
            'SELECT AVG(note)as note FROM notation WHERE member_id_note = :id',
            [
                ':id' => $id
            ]
        );
        
       
        return $this->buildEntity2($dbNotation);
      
    }
    

    private function buildEntity2(array $data)
    {
        $notation = new Notation();
      
        $notation->setNote($data['note']);
        //dump($notation);die; 
        return $notation;
    }


    
}


