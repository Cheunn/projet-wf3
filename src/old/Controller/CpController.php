<?php
namespace Controller;

use Symfony\Component\HttpFoundation\JsonResponse;


class CpController extends ControllerAbstract
{
    public function renvoieVille() {
        $list = $this->app['cp.repository']->findVille($_POST["codePostal"]);

        if (empty($list)) {
            $response = ['reponse' => 'ERROR'];
        } else {
            $list0 = array('reponse' => 'OK');
            $response = array_merge($list0, $list);
        }
        
        return new JsonResponse($response);
    }
}
