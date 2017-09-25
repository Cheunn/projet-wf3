<?php
namespace Controller;  

use Controller\ControllerAbstract;
use Entity\Annonce;
use Entity\Category;

class AnnonceController extends ControllerAbstract
{
    public function listAction()
    {
        $annonces = $this->app['annonce.repository']->findAll(); ///A CHANGER ByMember
        return $this->render(
            'annonce/edit.html.twig',
            [
                'annonces' => $annonces
            ]
        );
    }
    public function listActionMain()
    {
        $annonces = $this->app['annonce.repository']->findAll(); ///
        //
        // ICI ON NE GERE PAS ENCORE LA LIMITATION DU NOMBRES D'ANNONCES 6 PAR PAGES
        // 
        //
        return $this->render(
            'annonces.html.twig',
            [
                'annonces' => $annonces
            ]
        );
    }
    
    public function singleAnnonce($id = null)
    {
        $categories = $this->app['category.repository']->findAllChronique();
        $annonce = $this->app['annonce.repository']->findByIdAnnonce($id); ///A CHANGER ByMember
        return $this->render(
            'single_annonce.html.twig',
            [
                'annonce' => $annonce
//                'categories' => $categories
            ]
        );
    }
    public function getAnnonceId($id)
    {
        $annonce = $this->app['annonce.repository']->find($id); 
        $annonces = $this->app['annonce.repository']->findLastSix();
        
        return $this->render(
            'single_annonce.html.twig',
            [
                'annonce' => $annonce,
                'annonces' => $annonces
                // 'categories' => $categories
            ]
        );
    }
    public function lastThree()
    {
        $annonces = $this->app['annonce.repository']->findLastSix(); 
        
        return $this->render(
            'index.html.twig',
            [               
                'annonces' => $annonces
                
            ]
               
        );
    }
    public function lastSixHeader()
    {
        $annonces = $this->app['annonce.repository']->findLastSix(); // $limit
        
        return $this->render(
            'annonce_menu.html.twig',
            [               
                'annonces' => $annonces
            ]
            
        );
    }
//    public function lastThreeSingle()
//    {
//        $annonces = $this->app['annonce.repository']->findAllSingle(); 
//        die('pas ok');
//        return $this->render(
//            'single_annonce.html.twig',
//            [               
//                'annonces' => $annonces
//            ]
//        );
//    }
 
    public function editAction($id = null)
    {
        // pour construire la liste déroulante des rubriques
        $categories = $this->app['category.repository']->findAll(); ///-> A changer ByMember
        
        if (is_null($id)) {
            $annonce = new Annonce();
            $annonce
                //->setCategory(new Category())
                //->setAuthor($this->app['user.manager']->getUser()) //IMPORTANT POUR POLUS TARD
            ;
        } else {
            $annonce = $this->app['annonce.repository']->find($id); ///-> A changer ByMember
            
            if (is_null($annonce)) {
                $this->app->abort(404);
            }
        }
        
        $errors = [];
        
        if (!empty($_POST)) {
            $this->sanitizePost();
            
            $annonce
                //->setPost_title($_POST['post_title'])
                //->setId_post($_POST['id_post'])
                ->setParagraphe_1($_POST['paragraphe_1'])
                ->setParagraphe_2($_POST['paragraphe_2'])
                ->setUrl_img_1($_POST['url_img_1'])
                ->setUrl_img_2($_POST['url_img_2'])
                ->setUrl_img_3($_POST['url_img_3'])
                //->setMember_id_member($_POST['member_id_member'])
                //->setType_id_type($_POST['type_id_type']) // A FAIRE DIMANCHE
                ->setCategory_id_category($_POST['category_id_category'])
                ;
            
            //$annonce->getCategory_id_category()->setId_post($_POST['category']);
            
            // contrôle des champs de formulaire
            if (empty($_POST['post_title'])) {
                $errors['title'] = 'Le titre est obligatoire';
            } elseif (strlen($_POST['post_title']) > 45 || strlen($_POST['post_title']) < 6) {
                $errors['title'] = 'Le titre doit faire au moins 6 caractères et ne doit pas dépasser 45 caractères';
            }
            
            if (empty($_POST['paragraphe_1'])) {
                $errors['content'] = 'Une description est obligatoire';
            }
                       
            if (empty($errors)) {
                $this->app['annonce.repository']->save($annonce);
                $this->addFlashMessage("L'annonce est enregistré");
                
                return $this->redirectRoute('admin_annonces');
            } else {
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        
        return $this->render(
            'annonce/edit.html.twig',
            [
                'annonce' => $annonce,
                'categories' => $categories
            ]
        );
    }
    
    public function deleteAction($id)
    {
        $annonce = $this->app['annonce.repository']->find($id);
        
        if (is_null($annonce)) {
            $this->app->abort(404);
        }
        
        $this->app['annonce.repository']->delete($annonce);
        //$this->addFlashMessage("L'annonce est supprimé");
        
        return $this->redirectRoute('annonce'); ///(s)
    }
    
//    public function show($id)
//    {
//        $annonce = $this->app['annonce.repository']->findByAnnonce($id);
//        
//        if (is_null($annonce)) {
//            $this->app->abort(404);
//        }
//        
//        $this->app['annonce.repository']->show($annonce);
//                
//        return $annonce; 
//    }
}
