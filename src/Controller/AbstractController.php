<?php

namespace App\Controller;

use Twig\Environment;
use Twig\TwigFunction;
use Twig\Loader\FilesystemLoader;
use \Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;

abstract class AbstractController
{
	private ?Router $router;

	public function render($templateName, $data = []): Response
	{
		$loader = new FilesystemLoader(__DIR__ . "/../../templates");
		$twig = new Environment($loader, [
			'cache' => __DIR__ . "/../../var/cache/",
			'debug' => true,
		]);

		$function = new TwigFunction('path', function ($path, $param = []) {
			return $this->router->generate($path, $param);
		});
		$twig->addFunction($function);

		return new Response($twig->render($templateName, $data));
	}

	public function redirect($url): RedirectResponse
	{
		return new RedirectResponse($url);
	}

	public function redirectToRoute($route,  array $param = []): RedirectResponse
	{
		return $this->redirect($this->router->generate($route, $param));
	}

	public function setRouter(Router $router): void
	{
		$this->router = $router;
	}
}
