<?php

namespace Controller\Admin;

use Controller\ControllerAbstract;
use Entity\Tag;

class TagController extends ControllerAbstract {
    
    public function listAction() {
        
        $tag = $this->app['tag.repository']->findAll();
        
        return $this->render(
                'admin/tag/tag.html.twig',
                [
                    'tag' => $tag
                ]
        );   
    }
        public function editAction($idtag = null)
    {
        if (is_null($idtag)) {
            $tag = new Tag();
        } else {
            $tag= $this->app['tag.repository']->find($idtag);
            
            if (is_null($tag)) {
                $this->app->abort(404);
            }
        }
        
        $errors = [];
        
        if (!empty($_POST)) {
            $tag->setName($_POST['name']);
            
            // contrôle des champs de formulaire
           
            
            if (empty($errors)) {
                $this->app['tag.repository']->save($tag);
                $this->addFlashMessage('Le Tag est enregistrée');
                
                return $this->redirectRoute('admin_tag');
            } else {
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        
        return $this->render(
            'admin/tag/edit.html.twig',
            [
                'tag' => $tag
            ]
        );
    }
        
         
       

   
    public function deleteAction($idtag) {
        
        $tag = $this->app['tag.repository']->find($idtag);
        
        if (is_null($tag)) {
            $this->app->abort(404);
        }
        
        $this->app['tag.repository']->delete($tag);
        $this->addFlashMessage('Le Tag été supprimé');
        
        return $this->redirectRoute('admin_tag');
    }
}
