<?php
namespace Controller;

use Entity\User;


class UserController extends ControllerAbstract
{

    
    public function controle_Saisie(User $user, $param) 
    {            
         $errors = [];
       if (!empty($_POST)) 
       {
			
            $this->sanitizePost();
            
            $user
                ->setRole($_POST['role']) 
                ->setEmail($_POST['email'])
                ->setPassword($_POST['password'])	
                ->setName($_POST['name'])
            ;
            if (isset ($_POST['lastname']))    $user->setLastname($_POST['lastname'])  ;
            if (isset ($_POST['firstname']))   $user->setFirstname($_POST['firstname']);
            if (isset ($_POST['civility']))    $user->setCivility($_POST['civility'])  ;                                  
            if (isset ($_POST['url_img']))     $user->setUrl_img($_POST['url_img'])   ;                             
            if (isset ($_POST['description'])) $user->setDescription($_POST['description'])  ;                            
            if (isset ($_POST['adress']))      $user->setAdress($_POST['adress'])   ;               
            if (isset ($_POST['postal_code'])) $user->setPostal_code($_POST['postal_code'])  ;                                  
            if (isset ($_POST['town']))        $user->setTown($_POST['town']) ;
           if (isset ($_POST['phone']))        $user->setTown($_POST['phone']);             
            if (isset ($_POST['url_web_orga']))     $user->setUrl_web_orga($_POST['url_web_orga'])    ;                
            if (isset ($_POST['url_fb']))           $user->setUrl_fb($_POST['url_fb']);
 

            if (empty($_POST['name'])) 
            {
                 $errors['name'] = 'Le pseudo est obligatoire';
            } elseif (strlen($_POST['name']) > 30) {
                 $errors['name'] = 'Le pseudo ne doit pas dépasser 30 caractères';
            }
			
		
          
            if ( ! empty($user->getPhone() ))         
            {
                    if ( ! is_int($user->getPhone() ))          {$errors['Phone'] = "Le telephone doit etre numerique";}
                    if ( strlen($user->getPhone) != 10 )        {$errors['Phone'] = "Le telephone doit contenir 10 chiffres";}
            }
           
            // if (empty($_POST['lastname'])) {
                // $errors['lastname'] = 'Le nom est obligatoire';
            // } elseif (strlen($_POST['lastname']) > 100) {
                // $errors['lastname'] = 'Le nom ne doit pas dépasser 100 caractères';
            // }
           
            // if (empty($_POST['firstname'])) {
                // $errors['firstname'] = 'Le prénom est obligatoire';
            // } elseif (strlen($_POST['firstname']) > 100) {
                // $errors['firstname'] = 'Le prénom ne doit pas dépasser 100 caractères';
            // }
            
            
            if ($param == 'insert')
            {
                   
          
            
                    if (empty($_POST['password'])) {
                        $errors['password'] = 'Le mot de passe est obligatoire';
                    } elseif (!preg_match('/^[a-zA-Z0-9_-]{6,20}$/', $_POST['password'])) {
                        $errors['password'] = 'Le mot de passe doit faire entre 6 et 20 caractères'
                            . ' et ne doit contenir que des lettres, des chiffres ou les caractères _ et -'
                        ;
                    }

                    if (empty($_POST['password_confirm'])) {
                        $errors['password_confirm'] = 'La confirmation du mot de passe est obligatoire';
                    } elseif ($_POST['password_confirm'] != $_POST['password']) {
                        $errors['password_confirm'] = "La confirmation n'est pas identique au mot de passe";
                    }
            }
            
            if (empty($errors)) {
                $user->setPassword($this->app['user.manager']->encodePassword($_POST['password']));      
                $this->app['user.repository']->save($user);
                $this->addFlashMessage('Enregistrement effectué', 'success');
                return $this->redirectRoute('homepage');
            } else { 
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
            
    }
    
    
    
    public function registerAction()
    {
        $user = new User(); 
        $this->app['user.controller']->controle_Saisie($user, 'insert');
    
        return $this->render('user/register.html.twig',['user' => $user, 'createprofil' => 'yes']);
    }

    
    public function updateProfil()
    {
        $user = $this->app['user.manager']->getUser(); 
        $this->app['user.controller']->controle_Saisie($user, 'update');
        $civility = $this->app['user.manager']->getUser()->getCivility(); 
        //dump($user);
        if ($user->getRole() == 'user') return $this->render('user/register.html.twig',['user' => $user, 'roleuser' => 'yes', 'civility'=>$civility]);
        elseif ($user->getRole() == 'asso') return $this->render('user/register.html.twig',['user' => $user, 'roleasso' => 'yes']);
    }
    
    
    public function loginAction()
    {
        $email = '';
        
        if (!empty($_POST)) {
            $this->sanitizePost();
            
            $email = $_POST['email'];
            $user = $this->app['user.repository']->findByEmail($email);
            
            /*
            print_r($_POST); echo '<br><br><br>'; print_r($user); echo '<br><br><br>';echo 'password en base :'. $user->getPassword();
            echo '<br><br><br>';echo 'password codé :'.password_hash($_POST['password'], PASSWORD_BCRYPT );// a supprimer
            echo '<br><br><br>';echo 'password poste :'.$_POST['password']; die('fin');
            */
            if (!is_null($user)) {
                if ($this->app['user.manager']->verifyPassword($_POST['password'], $user->getPassword())) {
                    $this->app['user.manager']->login($user);
                    
                    return $this->redirectRoute('homepage');
                }
            }
            
            $this->addFlashMessage('Identification incorrecte', 'error');
           
        }
        
        return $this->render(
            'user/login.html.twig',
            [
                'email' => $email
            ]
        );
    }
    
    public function logoutAction()
    {
        $this->app['user.manager']->logout();
        
        return $this->redirectRoute('homepage');
    }
    
    
    public function listeProfil($id)
    {
        $userConsult = $this->app['user.repository']->findById($id);
        $userSession = $this->app['user.manager']->getUser();
        dump($userConsult->getId_member() );
        dump($userSession->getId_member() );
        die;
        
        return $this->render(
            'user/consultProfil.html.twig',
            [
                'user' => $user
            ]
        );
    }
    
    
    public function profilUser($id)
    {
       
        $user = $this->app['user.repository']->findById($id);
        $userSession = $this->app['user.manager']->getUser();
        //dump($userConsult->getId_member() );
        //dump($userSession->getId_member() );
       
        if ($userSession->getId_member() == $user->getId_member())
        { 
                $mode = 'adminuser';
                return $this->render('user/consultProfil.html.twig',
                    [
                        'user'          => $user, 
                        'modeadmin'     =>  $mode
                    ]
                ); 
        }
        else 
        {
             return $this->render('user/consultProfil.html.twig',
                    [
                        'user' => $user
                    ]
                );    
        }
    }
    
    public function messProfilToUs()
    {
        return $this->render('Contact.html.twig' );
    }
    
 
    
        public function envoyerPostInterne()
    {
        /*$this->app['user.manager']->logout();
        
        return $this->render(
            'user/profilUser.html.twig',
            [
                'email' => $email
            ]
        );
        
         */
          return $this->render('Contact.html.twig' );
    }
    
    

}
