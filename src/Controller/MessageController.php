<?php
namespace Controller;

use Entity\Message;


class MessageController extends ControllerAbstract
{

    
           
       
      
            
    
    public function envoyerMessageInterne()
    {
        echo 'coucou';//die('titi');
       dump($_POST);
        
        $message = new Message(); 
        
            $this->sanitizePost();

         
            $message
                ->setId_member_send($_POST['id_member_noteur']) 
                ->setId_member_receive($_POST['id_member_note'])
                ->setTitle($_POST['title'])	
                ->setContent($_POST['content'])
             
            ;
          

                $this->app['message.repository']->save($message);
                $this->addFlashNotation('Enregistrement effectué', 'success');
                return $this->redirectRoute('homepage');


 
    }
    
    
    public function registerAction()
    {
        $message = new Message(); 
        $this->app['message.controller']->controle_Saisie($message, 'insert');
    
        return $this->render('message/register.html.twig',['message' => $message, 'createprofil' => 'yes']);
    
         if (!empty($_POST)) 
       {
			
            $this->sanitizePost();
            
            $message
                ->setRole($_POST['role']) 
                ->setEmail($_POST['email'])
                ->setPassword($_POST['password'])	
                ->setName($_POST['name'])
            ;
          


            if (empty($_POST['name'])) 
            {
                 $errors['name'] = 'Le pseudo est obligatoire';
            } elseif (strlen($_POST['name']) > 30) {
                 $errors['name'] = 'Le pseudo ne doit pas dépasser 30 caractères';
            }
			
		
          
            if ( ! empty($message->getPhone() ))         
            {
                   
                    if ( ! is_int(intval($message->getPhone() )))          {$errors['Phone'] = "Le telephone doit etre numerique";}
                    if ( strlen($message->getPhone() ) != 10 )        {$errors['Phone'] = "Le telephone doit contenir 10 chiffres";}
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
                $message->setPassword($this->app['message.manager']->encodePassword($_POST['password']));      
                $this->app['message.repository']->save($message);
                $this->addFlashMessage('Enregistrement effectué', 'success');
                return $this->redirectRoute('homepage');
            } else { 
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
    
    
    
 
    }
    

    
 
    
     
    
     public function getMyMessages($userSender, $userreceiver )
    {
        $messages  = $this->app['message.repository']->getMyMessages($userSender,$userreceiver );

         return $this->render('message/consultProfil.html.twig',
                    [
                      
                        'messages'      =>  $messages
                    ]
                ); 
       
    }
    
    
    public function LireMessage($id_message )
    {
        $message  = $this->app['message.repository']->LireMessage($id_message );
        
         return $this->render('LireMessage/Lire.html.twig',
                    [
                      
                        'message'      =>  $message
                    ]
                ); 
       
    }
    

 
    

    
    

}
