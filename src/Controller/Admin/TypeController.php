<?php

namespace Controller\Admin;

use Controller\ControllerAbstract;
use Entity\Type;

class TypeController extends ControllerAbstract {
    
    public function listAction() {
        
        $type = $this->app['type.repository']->findAll();
        
        return $this->render(
                'admin/type/type.html.twig',
                [
                    'type' => $type
                ]
        );   
    }
        public function editAction($id_type = null)
    {
        if (is_null($id_type)) {
            $type = new Type();
        } else {
            $type= $this->app['type.repository']->find($id_type);
            
            if (is_null($type)) {
                $this->app->abort(404);
            }
        }
        
        $errors = [];
        
        if (!empty($_POST)) {
            $type->setName($_POST['name']);
            
            // contrôle des champs de formulaire
           
            
            if (empty($errors)) {
                $this->app['type.repository']->save($type);
                $this->addFlashMessage('Le Type est enregistrée');
                
                return $this->redirectRoute('admin_type');
            } else {
                $message = '<strong>Le type contient des erreurs</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        
        return $this->render(
            'admin/type/edit.html.twig',
            [
                'type' => $type
            ]
        );
    }
        
         
       

   
    public function deleteAction($id_type) {
        
        $type = $this->app['type.repository']->find($id_type);
        
        if (is_null($type)) {
            $this->app->abort(404);
        }
        
        $this->app['type.repository']->delete($type);
        $this->addFlashMessage('Le Type été supprimé');
        
        return $this->redirectRoute('admin_type');
    }
}
