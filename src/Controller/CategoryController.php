<?php
namespace Controller;

class CategoryController extends ControllerAbstract
{
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
