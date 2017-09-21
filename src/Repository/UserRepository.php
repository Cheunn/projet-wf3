<?php
namespace Repository;

use Entity\User;

class UserRepository extends RepositoryAbstract
{
    
     /**
     * 
     * @param string $email
     * @return User|null
     */
    public function findLogin($email)
    {
        $dbUser = $this->db->fetchAssoc(
            'SELECT name FROM member WHERE email = :email',
            [
                ':email' => $email
            ]
        );
        
        if (!empty($dbUser)) {
            return $this->buildEntity($dbUser);
        }
    }
    
    /**
     * 
     * @param string $email
     * @return User|null
     */
    public function findByEmail($email)
    {
        $dbUser = $this->db->fetchAssoc(
            'SELECT * FROM member WHERE email = :email',
            [
                ':email' => $email
            ]
        );
        
        if (!empty($dbUser)) {
            return $this->buildEntity($dbUser);
        }
    }
    
        /**
     * 
     * @param string $email
     * @return User|null
     */
    public function findById($id)
    {
        $dbUser = $this->db->fetchAssoc(
            'SELECT * FROM member WHERE id_member = :id',
            [
                ':id' => $id
            ]
        );
        
        if (!empty($dbUser)) {
            return $this->buildEntity($dbUser);
        }
    }
    
    /**
     * 
     * @param User $user
     */
    public function save(User $user) 
    {
        
               $data = [
                'role' => $user->getRole(),
                 'firstname' => $user->getFirstname(),
                'lastname' => $user->getLastname(),
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => $user->getPassword(),
                'phone' => $user->getPhone(),
                'civility' => $user->getcivility(),
                'url_img' => $user->geturl_img(),
                'is_active' => 'yes',
                'description' => $user->getdescription(),
                'date_create' => 'NOW()',
                'adress' => $user->getadress(),  
                'postal_code' => $user->getPostal_code(), 
                'country' => 'FRANCE', 
                'town' => $user->getTown (), 
                'url_web_orga' => $user->geturl_web_orga(),
                'url_fb' => $user->geturl_fb(),
            ];
             //dump($user);
        //dump($data); 
   
    
        
        if ($user->getId_member()) {
            $this->db->update(
                'member',
                $data,
                [
                    'id_member' => $user->getId_member()
                ]
            );
        } else {
            $this->db->insert(
                'member', 
                $data
            );
            $user->setId_member($this->db->lastInsertId());
            
       
        }
    }
    

    /**
     * 
     * @param array $data
     * @return User
     */
    private function buildEntity(array $data)
    {
        $user = new User();
        
        $user
            ->setId_member($data['id_member'])
            ->setLastname($data['lastname'])
            ->setFirstname($data['firstname'])
            ->setName($data['name'])
            ->setEmail($data['email'])
            ->setPassword($data['password'])
            ->setRole($data['role'])
            ->setPhone($data['phone'])
            ->setCivility($data['civility'])
            ->setUrl_img($data['url_img'])
            ->setDescription($data['description'])
            ->setDate_create($data['date_create'])
            ->setAdress($data['adress'])
            ->setTown($data['town'])
                ->setTown($data['postal_code'])
            ->setUrl_web_orga($data['url_web_orga'])
            ->setUrl_fb($data['url_fb'])
    
        ;
        //dump($user);die;
        return $user;
    }
}


