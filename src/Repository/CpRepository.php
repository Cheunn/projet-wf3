<?php
namespace Repository;

use Entity\Cp;

class CpRepository extends RepositoryAbstract
{
    /**
     * 
     * @param string $email
     * @return Cp|null
     */
    public function findVille($cp)
    {
        $dbCp = $this->db->fetchAssoc(
            'SELECT * FROM cp_autocomplete WHERE CP = :cp',
            [
                ':cp' => $cp
            ]
        );

        return $dbCp;
        
//        if (!empty($dbCp)) {
//            return $this->buildEntity($dbCp);
//        }
    }
    
    /**
     * 
     * @param array $data
     * @return Cp
     */
    private function buildEntity(array $data)
    {
        $cp = new Cp();
        
        $cp
            ->setCp($data['CP'])
            ->setVille($data['VILLE'])
        ;
        
        return $cp;
    }
    
 
}
