<?php // namespace Controller;
//
//class TagController extends ControllerAbstract {
//    
//    public function indexAction($idtag){
//        
//        $tag = $this->app['tag.repository']->find($idtag);
//        $tag = $this->app['tag.repository']->findByName($tag);
//       
//        
//        if (empty($tag)) {
//            $this->app->abort(404);
//        }
        
//        return $this->render(
//                'tag/tag.html.twig',
//                [
//                    'tag' => $tag,
//                    'name' => $name
//                ]
//        );
//    }
//    
//    public function menuAction() {
//        
//        $tag = $this->app['tag.repository']->findAll();
//        
//        return $this->render(
//                'tag/tag.html.twig',
//                [
//                    'tag' => $tag,
//                'name' => $name
//                ]
//        );
//    }
//}
