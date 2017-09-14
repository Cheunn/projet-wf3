<?php
namespace Controller;

use Entity\User;


class UserController extends ControllerAbstract
{
    public function registerAction()
    {
        $user = new User();
        $errors = [];
        
   
        if (!empty($_POST)) {
            $this->sanitizePost();
            
            $user
                //->setRole($_POST['role'])   
                //->setLastname($_POST['lastname'])
                //->setFirstname($_POST['firstname'])
                ->setPseudo($_POST['pseudo'])
                ->setEmail($_POST['email'])
                ->setPassword($_POST['password'])
                /*
                ->setPhone($_POST['phone'])
                ->setCivility($_POST['civility'])                                    
                ->setUrl_img($_POST['url_img'])                  
                ->setIs_active($_POST['is_active'])                  
                ->setDescription($_POST['description'])                  
                ->setDate_createate_create($_POST['date_create'])                  
                ->setAdress($_POST['adress'])                  
                ->setPostal_code($_POST['postal_code'])                  
                ->setCountry($_POST['country'])                    
                ->setTown($_POST['town'])                    
                ->setUrl_web_orga($_POST['url_web_orga'])                    
                ->setUrl_fb($_POST['url_fb'])
                 
                 */  
            ;

                    
            
             if (empty($_POST['pseudo'])) {
                $errors['pseudo'] = 'Le pseudo est obligatoire';
            } elseif (strlen($_POST['pseudo']) > 100) {
                $errors['pseudo'] = 'Le pseudo ne doit pas dépasser 100 caractères';
            }
            /*  Champs a mettre ensuite 
            if (empty($_POST['lastname'])) {
                $errors['lastname'] = 'Le nom est obligatoire';
            } elseif (strlen($_POST['lastname']) > 100) {
                $errors['lastname'] = 'Le nom ne doit pas dépasser 100 caractères';
            }
            
            if (empty($_POST['firstname'])) {
                $errors['firstname'] = 'Le prénom est obligatoire';
            } elseif (strlen($_POST['firstname']) > 100) {
                $errors['firstname'] = 'Le prénom ne doit pas dépasser 100 caractères';
            }
            */
            if (empty($_POST['email'])) {
                $errors['email'] = "L'email est obligatoire";
            } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "L'email n'est pas valide";
            } elseif (!is_null($this->app['user.repository']->findByEmail($_POST['email']))) {
                $errors['email'] = "L'email est déjà utilisé";
            }
            
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
        
        return $this->render(
            'user/register.html.twig',
            [
                'user' => $user
            ]
        );
    }
    
    public function loginAction()
    {
        $email = '';
        
        if (!empty($_POST)) {
            $this->sanitizePost();
            
            $email = $_POST['email'];
            $user = $this->app['user.repository']->findByEmail($email);
            print_r($_POST); echo '<br><br><br>'; print_r($user); echo '<br><br><br>';echo 'password en base :'. $user->getPassword();
            echo '<br><br><br>';echo 'password codé :'.password_hash($_POST['password'], PASSWORD_BCRYPT );// a supprimer
            echo '<br><br><br>';echo 'password poste :'.$_POST['password']; die('fin');
            if (!is_null($user)) {
                if ($this->app['user.manager']->verifyPassword($_POST['password'], $user->getPassword())) {
                    $this->app['user.manager']->login($user);
                    
                    return $this->redirectRoute('homepage');
                }
            }
            
            $this->addFlashMessage('Identification incorrecte', 'error');
            die(' FIN NON OK');
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
}
