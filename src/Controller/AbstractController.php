<?php

namespace App\Controller;

use Twig\Environment;
use Twig\TwigFunction;
use Twig\Loader\FilesystemLoader;
use \Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

abstract class AbstractController
{
    public function render($templateName, $data = []): Response
    {

        $loader = new FilesystemLoader(__DIR__ . "/../../templates");
        $twig = new Environment($loader, [
            'cache' => __DIR__ . "/../../var/cache/",
            'debug' => true,
		]);
		// $function = new TwigFunction('path', function ($url) use ($data)  {
		// 	return $data['url_generator']->generate($url);
		// });
		// $twig->addFunction($function);

        return new Response($twig->render($templateName, $data));
    }

    public function redirectTo($path){
        return new RedirectResponse($path);
    }
}