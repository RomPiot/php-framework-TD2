<?php


namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Doctrine\ORM\Mapping\Entity()
 * @ORM\Table(name="player")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerRepository")
 */
class Player
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
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @ORM\ManyToMany(targetEntity="Game", inversedBy="players")
     */
    private $games;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Score",mappedBy="players")
     */
    private $scores;

    public function __construct() {
        $this->scores = new ArrayCollection();
        $this->games = new ArrayCollection();
    }



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getGames() : ArrayCollection
    {
        return $this->games;
    }

    /**
     * @param mixed $games
     */
    public function setGames(Game $games) : void
    {
        $this->games = $games;
    }

    public function addGame(Game $game) : void
    {
        $this->games[] = $game;
    }

    /**
     * @return ArrayCollection
     */
    public function getScores(): ArrayCollection
    {
        return $this->scores;
    }

    /**
     * @param ArrayCollection $scores
     */
    public function setScores(Score $scores)
    {
        $this->scores[] = $scores;
    }




}