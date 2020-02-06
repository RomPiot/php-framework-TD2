<?php

namespace App\Controller;


use App\Entity\Game;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;


class GameController extends AbstractController
{

	/** @Route("/game", name="game") */
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $repository = $entityManager->getRepository(Game::class);
        $games = $repository->findAll();

//        dd($games);

        return $this->render(
            "game/index.html.twig",
            ["games" => $games]
        );

        return $this->render("game/index.html.twig", ["games" => $games]);

    }

    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($request->getMethod() == Request::METHOD_POST) {
            if ($request->request->has('submit')) {
                $name = $request->request->get('name');
                $image = $request->request->get('image');

                $game = new Game();
                $game->setName($name);
                $game->setImage($image);
                $entityManager->persist($game);
                $entityManager->flush();
            }
            return $this->redirectTo("/game");
        }

        $game = $game ?? null;
        return $this->render("game/form.html.twig", ["game" => $game]);
    }


    public function show(Request $request, EntityManagerInterface $entityManager): Response
    {
        $id = $request->query->get("id");

        $repository = $entityManager->getRepository(Game::class);
        $game = $repository->find($id);

        return $this->render(
            "game/show.html.twig",
            [
                "game" => $game
            ]
        );
    }


    public function edit(Request $request, EntityManagerInterface $entityManager): Response
    {
        $id = $request->query->get("id");

        $repository = $entityManager->getRepository(Game::class);
        $game = $repository->find($id);

        if ($request->getMethod() == Request::METHOD_POST) {
            if ($request->request->has('submit')) {
                $name = $request->request->get('name');
                $image = $request->request->get('image');

                $game->setName($name);
                $game->setImage($image);
                $entityManager->persist($game);
                $entityManager->flush();

                return $this->redirectTo("/game");
            }
        }
        return $this->render("game/form.html.twig",	["game" => $game]);
    }

    public function delete(Request $request, EntityManagerInterface $entityManager): Response
    {
        $id = $request->query->get("id");
        $repository = $entityManager->getRepository(Game::class);
        $game = $repository->find($id);

        $entityManager->remove($game);
        $entityManager->flush();
        return $this->redirectTo("/game");

    }

}