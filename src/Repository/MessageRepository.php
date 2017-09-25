<?php
namespace Repository;

use Entity\Message;
use Entity\User;
//use function dump;

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
               
            
                'id_member_send' => $message->getId_member_send(),
                'id_member_receive' => $message->getId_member_receive(),
         
            ];

            $this->db->insert(
                'message', 
                $data
            );
   

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
        
        if (isset($data['sender_name'])) {
            $user = new User(); 
            $user -> setName($data['sender_name']);
            $message->setSender($user);
        }
            return $message;
    }

    private function buildEntity2(array $data)
    {
        $user = new User(); 
        $user -> setName($data['sender_name']); 
                
        $message = new Message();
        $message
                 ->setIdmessage($data['idmessage'])
            ->setTitle($data['title'])
            ->setContent($data['content'])
            ->setId_post($data['id_post'])
            ->setDate($data['date'])
            ->setId_member_send($data['id_member_send'])
            ->setId_member_receive($data['id_member_receive'])
            ->setUserName($user)
        ;
            //dump($message); die('ci'); 
            return $message;
    }



    public function getMyMessages( $idreceiver)       
    {
               
        $query = <<<SQL
SELECT mes.*, ms.name as sender_name
    FROM `message` mes
join member ms on mes.`id_member_send` = ms.id_member
WHERE id_member_receive = $idreceiver
SQL;
         $dbMessages = $this->db->fetchAll($query);
        $messages =[];
        
        foreach ($dbMessages as $dbmesage) {
            $messages[] = $this->buildEntity($dbmesage); 
        }
        return $messages;

        if (!empty($dbMessage)) {
            return $this->buildEntity2($dbMessage);
        }
         
      
    }
    



    
}


