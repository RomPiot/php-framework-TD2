<?php


namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Doctrine\ORM\Mapping\Entity()
 * @ORM\Table(name="score")
 * @ORM\Entity(repositoryClass="App\Repository\ScoreRepository")
 */
class Score
{
    /**
     * // Le champ sera une clé primaire
     * @ORM\Id()
     * // Le champ sera de type int
     * @ORM\Column(type="integer")
     * // Le champ sera une valeur auto-générée (autoincrement)
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $score;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @var ArrayCollection
     * @ORM\ManyToOne(targetEntity="Player",inversedBy="scores")
     */
    private $players;

    /**
     * @ORM\ManyToOne(targetEntity="Game",inversedBy="scores")
     */
    private $game;


    public function __construct() {
        $this->players = new ArrayCollection();
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param mixed $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return ArrayCollection
     */
    public function getPlayers(): ArrayCollection
    {
        return $this->players;
    }

    /**
     * @param ArrayCollection $players
     */
    public function setPlayers(Player $players)
    {
        $this->players[] = $players;
    }

    /**
     * @return mixed
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * @param mixed $game
     */
    public function setGame(Game $game)
    {
        $this->game = $game;
    }



}