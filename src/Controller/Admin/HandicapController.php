<?php

namespace Controller\Admin;

use Controller\ControllerAbstract;
use Entity\Handicap;

class HandicapController extends ControllerAbstract {
    
    public function listAction() {
        
        $handicap = $this->app['handicap.repository']->findAll();
        
        return $this->render(
                'admin/handicap/handicap.html.twig',
                [
                    'handicap' => $handicap
                ]
        );   
    }
        public function editAction($id = null)
    {
        if (is_null($id)) {
            $handicap = new Handicap();
        } else {
            $handicap= $this->app['handicap.repository']->find($id);
            
            if (is_null($handicap)) {
                $this->app->abort(404);
            }
        }
        
        $errors = [];
        
        if (!empty($_POST)) {
            $handicap->setName($_POST['name']);
            
            // contrôle des champs de formulaire
            if (empty($_POST['name'])) {
                $errors['name'] = 'L\'handicap est obligatoire';
            } elseif (strlen($_POST['name']) > 50) {
                $errors['name'] = 'L\'handicap ne doit pas dépasser 50 caractères';
            }
            
            if (empty($errors)) {
                $this->app['handicap.repository']->save($handicap);
                $this->addFlashMessage('L\'handicap est enregistrée');
                
                return $this->redirectRoute('admin_handicap');
            } else {
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        
        return $this->render(
            'admin/handicap/edit.html.twig',
            [
                'handicap' => $handicap
            ]
        );
    }
        
         
       

   
    public function deleteAction($id) {
        
        $handicap = $this->app['handicap.repository']->find($id);
        
        if (is_null($handicap)) {
            $this->app->abort(404);
        }
        
        $this->app['handicap.repository']->delete($handicap);
        $this->addFlashMessage('L\'handicap a été supprimé');
        
        return $this->redirectRoute('admin_handicap');
    }
}
