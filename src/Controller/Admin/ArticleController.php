<?php
namespace Controller\Admin;

use Controller\ControllerAbstract;
use Entity\Article;
use Entity\Category;

class ArticleController extends ControllerAbstract
{
    public function listAction()
    {
        $articles = $this->app['article.repository']->findAll();
        
        return $this->render(
            'admin/article/list.html.twig',
            [
                'articles' => $articles
            ]
        );
    }
    
    public function editAction($id = null)
    {
        // pour construire la liste déroulante des rubriques
        $categories = $this->app['category.repository']->findAll();
        
        if (is_null($id)) {
            $article = new Article();
            $article
                ->setCategory(new Category())
                ->setAuthor($this->app['user.manager']->getUser())
            ;
        } else {
            $article = $this->app['article.repository']->find($id);
            
            if (is_null($article)) {
                $this->app->abort(404);
            }
        }
        
        $errors = [];
        
        if (!empty($_POST)) {
            $this->sanitizePost();
            
            $article
                ->setTitle($_POST['title'])
                ->setContent($_POST['content'])
                ->setHeader($_POST['header'])
            ;
            
            $article->getCategory()->setId($_POST['category']);
            
            // contrôle des champs de formulaire
            if (empty($_POST['title'])) {
                $errors['title'] = 'Le titre est obligatoire';
            } elseif (strlen($_POST['title']) > 100) {
                $errors['title'] = 'Le titre ne doit pas dépasser 100 caractères';
            }
            
            if (empty($_POST['content'])) {
                $errors['content'] = 'Le contenu est obligatoire';
            }
            
            if (empty($_POST['header'])) {
                $errors['header'] = "L'entête est obligatoire";
            }
            
            if (empty($_POST['category'])) {
                $errors['category'] = 'La rubrique est obligatoire';
            }
            
            if (empty($errors)) {
                $this->app['article.repository']->save($article);
                $this->addFlashMessage("L'article est enregistré");
                
                return $this->redirectRoute('admin_articles');
            } else {
                $message = '<strong>Le formulaire contient des erreurs</strong>';
                $message .= '<br>' . implode('<br>', $errors);
                $this->addFlashMessage($message, 'error');
            }
        }
        
        return $this->render(
            'admin/article/edit.html.twig',
            [
                'article' => $article,
                'categories' => $categories
            ]
        );
    }
    
    public function deleteAction($id)
    {
        $article = $this->app['article.repository']->find($id);
        
        if (is_null($article)) {
            $this->app->abort(404);
        }
        
        $this->app['article.repository']->delete($article);
        $this->addFlashMessage("L'article est supprimé");
        
        return $this->redirectRoute('admin_articles');
    }
}
