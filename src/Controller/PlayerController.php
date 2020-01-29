<?php

namespace App\Controller;


use App\Entity\Player;
use App\FakeData;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PlayerController extends AbstractController
{


    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        /**
         * @todo lister les joueurs
         */

        $test = new Player();
        $test->setUsername("freferf");
        $test->setEmail("vrevrev");
        $entityManager->persist($test);

        $repository = $entityManager->getRepository(Player::class);
        $players = $repository->findAll();

        return $this->render(
            "player/index", [
                "players" => $players]
        );

    }

    public function add(Request $request): Response
    {
        // $player = FakeData::players(1)[0];

        if ($request->getMethod() == Request::METHOD_POST) {
            /**
             * @todo enregistrer l'objet
             */
            if ($request->request->has('submit')) {
                $name = $request->request->get('username');
                $email = $request->request->get('email');

            }



            return $this->redirectTo("/player");
        }
        return $this->render(
            "player/form",
            ["player" => $player]
        );
    }


    public function show($id): Response
    {
        $player = FakeData::players(1)[0];
        return $this->render(
            "player/show",
            ["player" => $player, "availableGames" => FakeData::games()]
        );
    }


    public function edit($id, Request $request): Response
    {
        $player = FakeData::players(1)[0];

        if ($request->getMethod() == Request::METHOD_POST) {
            /**
             * @todo enregistrer l'objet
             */
            return $this->redirectTo("/player");
        }

        return $this->render(
            "player/form",
            ["player" => $player]
        );


    }

    public function delete($id): Response
    {
        /**
         * @todo supprimer l'objet
         */
        return $this->redirectTo("/game");

    }

    public function addgame($id, Request $request): Response
    {
        if ($request->getMethod() == Request::METHOD_POST) {
            /**
             * @todo enregistrer l'objet
             */
            return $this->redirectTo("/player");
        }
    }

}