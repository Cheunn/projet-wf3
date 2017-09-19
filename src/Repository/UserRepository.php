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
     * @param User $user
     */
    public function save(User $user) 
    {
        $data = [
            //'lastname' => $user->getLastname(),
            //'firstname' => $user->getFirstname(),
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword()
            //'role' => $user->getRole()
        ];
        //dump($data); die;
        
        if ($user->getId_member()) {
            $this->db->update(
                'member',
                $data,
                [
                    'id' => $user->getId_member()
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
                ->setIs_active($data['is_active'])
                ->setDescription($data['description'])
                ->setDate_create($data['date_create'])
                ->setAdress($data['adress'])
                ->setCountry($data['country'])
                ->setTown($data['town'])
                ->setUrl_web_orga($data['url_web_orga'])
                ->setUrl_fb($data['url_fb'])

                
        ;
        //dump($user);die;
        return $user;
    }
}
