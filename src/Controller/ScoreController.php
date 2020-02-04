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
        return $this->render("score/index", ["scores" => $scores,
            "games" => $games, "players" => $players]);
    }

    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $score = new Score();

        if ($request->getMethod() == Request::METHOD_POST) {

            if ($request->request->has('submit')) {

                $player = $request->query->get("player");
                $game = $request->query->get("game");
                $scoreNumber = $request->query->get("score");



                $score->setGame($game);
                $score->setPlayers($player);
                $score->setScore($scoreNumber);

                $entityManager->persist($score);
                $entityManager->flush();
            }


            return $this->redirectTo("/score");
        }
    }



}