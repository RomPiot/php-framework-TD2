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
		$repository = $entityManager->getRepository(Player::class);
		$players = $repository->findAll();

		return $this->render(
			"player/index",
			["players" => $players]
		);
	}

	public function add(Request $request, EntityManagerInterface $entityManager): Response
	{
		if ($request->getMethod() == Request::METHOD_POST) {
			if ($request->request->has('submit')) {
				$name = $request->request->get('username');
				$email = $request->request->get('email');

				$player = new Player();
				$player->setUsername($name);
				$player->setEmail($email);
				$entityManager->persist($player);
				$entityManager->flush();
			}
			return $this->redirectTo("/player");
		}

		// TODO
		return $this->render(
			"player/form",
			["player" => $player]
		);
	}


	public function show(Request $request, EntityManagerInterface $entityManager): Response
	{
		$id = $request->query->get("id");

		$repository = $entityManager->getRepository(Player::class);
		$player = $repository->find($id);

		return $this->render(
			"player/show",
			["player" => $player, "availableGames" => FakeData::games()]
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
