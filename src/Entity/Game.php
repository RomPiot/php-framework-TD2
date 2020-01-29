<?php


namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Doctrine\ORM\Mapping\Entity()
 * @ORM\Table(name="game")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerRepository")
 */
class Game
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
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="Player", mappedBy="games")
     */
    private $players;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Score",mappedBy="game")
     */
    private $scores;
    /**
     * @return mixed
     */

    public function __construct() {
        $this->scores = new ArrayCollection();
        $this->players = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
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