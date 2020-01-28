<?php


namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Doctrine\ORM\Mapping\Entity()
 * @ORM\Table(name="score")
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
     * @ORM\ManyToMany(targetEntity="Player",inversedBy="scores")
     */
    private $players;

    /**
     * @ORM\ManyToOne(targetEntity="Game",inversedBy="scores")
     */
    private $game;

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



}