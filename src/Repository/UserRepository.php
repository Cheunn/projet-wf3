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
    public function findByEmail($email)
    {
        $dbUser = $this->db->fetchAssoc(
            'SELECT * FROM user WHERE email = :email',
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
            'lastname' => $user->getLastname(),
            'firstname' => $user->getFirstname(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'role' => $user->getRole()
        ];
        
        if ($user->getId()) {
            $this->db->update(
                'user',
                $data,
                [
                    'id' => $user->getId()
                ]
            );
        } else {
            $this->db->insert(
                'user', 
                $data
            );
            $user->setId($this->db->lastInsertId());
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
            ->setId($data['id'])
            ->setLastname($data['lastname'])
            ->setFirstname($data['firstname'])
            ->setEmail($data['email'])
            ->setPassword($data['password'])
            ->setRole($data['role'])
        ;
        
        return $user;
    }
}
