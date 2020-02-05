<?php

namespace App\Controller;


use App\Entity\Game;
use App\Entity\Player;
use App\Entity\Score;
use App\FakeData;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;


class ScoreController extends AbstractController
{


    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $scores = $entityManager->getRepository(Score::class)->findAll();
        $games = $entityManager->getRepository(Game::class)->findAll();
        $players = $entityManager->getRepository(Player::class)->findAll();

//        dd($scores);
        return $this->render("score/index.html.twig", ["scores" => $scores,
            "games" => $games, "players" => $players]);
    }

	public function delete(Request $request, EntityManagerInterface $entityManager): Response
	{
		$id = $request->query->get("id");
		$repository = $entityManager->getRepository(Score::class);
		$score = $repository->find($id);

		$entityManager->remove($score);
		$entityManager->flush();


		return $this->redirectTo("/score");
	}
    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $score = new Score();
        if ($request->getMethod() == Request::METHOD_GET) {

           if ($request->query->has('submit')) {

                $playerId = $request->query->get("player");
                $playerRepository = $entityManager->getRepository(Player::class);
                $player = $playerRepository->find($playerId);

                $gameId = $request->query->get("game");
                $gameRepository = $entityManager->getRepository(Game::class);
                $game = $gameRepository->find($gameId);


                $scoreNumber = $request->query->get("score");

                $score->setScore($scoreNumber);
                $score->setGame($game);

                $score->addPlayer($player);


               $entityManager->persist($score);
               $entityManager->flush();
           }


            return $this->redirectTo("/score");
        }
    }



}