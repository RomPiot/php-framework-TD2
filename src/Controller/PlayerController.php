<?php

namespace App\Controller;


use App\Entity\Game;
use App\Entity\Player;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PlayerController extends AbstractController
{
	public function index(Request $request, EntityManagerInterface $entityManager): Response
	{
		$repository = $entityManager->getRepository(Player::class);
		$players = $repository->findAll();

		return $this->render(
			"player/index",
			["players" => $players]
		);
	}

	public function add(Request $request, EntityManagerInterface $entityManager): Response
	{
        $player = new Player();

        if ($request->getMethod() == Request::METHOD_POST) {
			if ($request->request->has('submit')) {
				$name = $request->request->get('username');
				$email = $request->request->get('email');

				$player->setUsername($name);
				$player->setEmail($email);
				$entityManager->persist($player);
				$entityManager->flush();
			}
			return $this->redirectTo("/player");
		}

		return $this->render("player/form", ["player" => $player]);
	}


    public function show(Request $request, EntityManagerInterface $entityManager): Response
    {
        $id = $request->query->get("id");

        $gameRepository = $entityManager->getRepository(Game::class);
        $repository = $entityManager->getRepository(Player::class);
        $player = $repository->find($id);

//        dd($player->getGames());


        return $this->render(
            "player/show",
            [
                "player" => $player,
                "availableGames" => $gameRepository->findAll()
            ]
        );
    }


	public function edit(Request $request, EntityManagerInterface $entityManager): Response
	{
		$id = $request->query->get("id");

		$repository = $entityManager->getRepository(Player::class);
		$player = $repository->find($id);

		if ($request->getMethod() == Request::METHOD_POST) {
			if ($request->request->has('submit')) {
				$name = $request->request->get('username');
				$email = $request->request->get('email');

				$player->setUsername($name);
				$player->setEmail($email);
				$entityManager->persist($player);
				$entityManager->flush();

				return $this->redirectTo("/player");
			}
		}
		return $this->render("player/form",	["player" => $player]);
	}

	public function delete(Request $request, EntityManagerInterface $entityManager): Response
	{
		$id = $request->query->get("id");
		$repository = $entityManager->getRepository(Player::class);
		$player = $repository->find($id);

		$entityManager->remove($player);
		$entityManager->flush();


		return $this->redirectTo("/player");
	}

	public function addgame(Request $request, EntityManagerInterface $entityManager): Response
	{
		if ($request->getMethod() == Request::METHOD_POST) {

            $playerId = $request->query->get("id");
            $playerRepository = $entityManager->getRepository(Player::class);
            $player = $playerRepository->find($playerId);

            $gameId = $request->request->get("game");
            $gameRepository = $entityManager->getRepository(Game::class);
            $game = $gameRepository->find($gameId);

            $player->addGame($game);

            $entityManager->persist($player);
            $entityManager->flush();

			return $this->redirectTo("/player");
		}
	}
}
