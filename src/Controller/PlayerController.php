<?php

namespace App\Controller;


use App\Entity\Game;
use App\Entity\Player;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlayerController extends AbstractController
{
	/** @Route("/player", name="players") */
	public function index(Request $request, EntityManagerInterface $entityManager): Response
	{
		$repository = $entityManager->getRepository(Player::class);
		$players = $repository->findAll();

		return $this->render(
			"player/index.html.twig",
			["players" => $players]
		);
	}

	/** @Route("/player/add", name="player_add") */
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
			return $this->redirectToRoute("players");
		}

		return $this->render("player/form.html.twig", ["player" => $player]);
	}

	/** @Route("/player/show/{id}", name="player_show") */
	public function show($id, Request $request, EntityManagerInterface $entityManager): Response
	{
		// $id = $request->query->get("id");

		$gameRepository = $entityManager->getRepository(Game::class);
		$repository = $entityManager->getRepository(Player::class);
		$player = $repository->find($id);

		return $this->render(
			"player/show.html.twig",
			[
				"player" => $player,
				"availableGames" => $gameRepository->findAll()
			]
		);
	}

	/** @Route("/player/edit/{id}", name="player_edit") */
	public function edit($id, Request $request, EntityManagerInterface $entityManager): Response
	{
		// $id = $request->query->get("id");

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

				return $this->redirectToRoute("players");
			}
		}
		return $this->render("player/form.html.twig",	["player" => $player]);
	}

	/** @Route("/player/delete/{id}", name="player_delete") */
	public function delete($id, Request $request, EntityManagerInterface $entityManager): Response
	{
		// $id = $request->query->get("id");
		$repository = $entityManager->getRepository(Player::class);
		$player = $repository->find($id);

		$entityManager->remove($player);
		$entityManager->flush();


		return $this->redirectToRoute("players");
	}

	/** @Route("/player/addgame", name="player_add_game") */
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

			return $this->redirectToRoute("players");
		}
	}
}
