<?php
namespace Controller;

class CategoryController extends ControllerAbstract
{
    /* BOUCLE */ /* BOUCLE */ /* BOUCLE */ /* BOUCLE */
    public function listAction()
    {
        $categories = $this->app['category.repository']->findAll();
        
        return $this->render(
            'index.html.twig',
            [
                'categories' => $categories
            ]
        );
    }
    /* BOUCLE */ /* BOUCLE */ /* BOUCLE */ /* BOUCLE */
    /* Julien */ /* Julien */ /* Julien */ /* Julien */
    public function listActionChronique()
    {
        $categories = $this->app['category.repository']->findAllChronique();
        
        return $this->render(
            'aside.html.twig',
            [
                'categories' => $categories
            ]
        );
    }
    /* BOUCLE */ /* BOUCLE */ /* BOUCLE */ /* BOUCLE */
    /* Julien */ /* Julien */ /* Julien */ /* Julien */
//    public function listLastChroniques()
//    {
//        $categories = $this->app['category.repository']->findLastChronique();
//        
//        return $this->render(
//            'header.html.twig',
//            [
//                'categories' => $categories
//            ]
//        );
//    }
    
    
    public function indexAction($id)
    {
        $category = $this->app['category.repository']->find($id);
        $articles = $this->app['article.repository']->findByCategory($category);
        
        if (empty($category)) {
            $this->app->abort(404);
        }
        
        return $this->render(
            'category/index.html.twig',
            [
                'category' => $category,
                'articles' => $articles
            ]
        );
    }

        public function menuAction()
    {
        $categories = $this->app['category.repository']->findAll();
        
        return $this->render(
            'category/menu.html.twig',
            [
                'categories' => $categories
            ]
        );
    }
}
