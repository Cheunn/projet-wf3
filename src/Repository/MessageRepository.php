<?php
namespace Repository;

use Entity\Message;

class MessageRepository extends RepositoryAbstract
{
    
   
   
    
        /**
     * 
     * @param string $email
     * @return Message|null
     */
    public function LireMessage($id)
    {
        $dbMessage = $this->db->fetchAssoc
        (
            'SELECT * FROM message WHERE id_message = :id',
            [
                ':id' => $id
            ]
        );
        
        if (!empty($dbMessage)) {
            return $this->buildEntity($dbMessage);
        }
    }
    
    /**
     * 
     * @param Message $message
     */
    public function save(Message $message) 
    {

               $data = [
                'title' => $message->getTitle(),
                 'content' => $message->getContent(),
                'id_post' => $message->getId_post(),
                 'date' => $message->getDate(),
                 'id_post' => $message->getId_post(),
                'id_member_send' => $message->getId_member_send(),
                'id_member_receive' => $message->getId_member_receive(),
         
            ];

            $this->db->insert(
                'message', 
                $data
            );
            $message->setId_message($this->db->lastInsertId());

    }
    

    /**
     * 
     * @param array $data
     * @return Message
     */
    private function buildEntity(array $data)
    {
        $message = new Message();
        
        $message
                 ->setIdmessage($data['idmessage'])
            ->setTitle($data['title'])
            ->setContent($data['content'])
            ->setId_post($data['id_post'])
            ->setDate($data['date'])
            ->setId_member_send($data['id_member_send'])
            ->setId_member_receive($data['id_member_receive'])
      
        ;
    
        return $message;
    }



    public function getMyMessages( $idreceiver)       
    {
        // dump($idreceiver);
        
        $query = " SELECT * FROM message  WHERE id_member_receive = " . $idreceiver ;  
       
         $dbMessages = $this->db->fetchAll($query);
        $messages =[];
        
        foreach ($dbMessages as $dbmesage) {
            $messages[] = $this->buildEntity($dbmesage); 
        }
        return $messages;

        if (!empty($dbMessage)) {
            return $this->buildEntity($dbMessage);
        }
         
      
    }
    



    
}


