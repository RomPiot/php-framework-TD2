<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function index(Request $request = null) : Response {

        /*$response = new Response("it works !");
        $response->send();*/

        return $this->render(
            "home/index",
            [
                "name"=>$request->query->get('name')
            ]
        );
    }
}