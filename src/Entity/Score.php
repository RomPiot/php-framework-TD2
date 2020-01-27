<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Doctrine\ORM\Mapping\Entity()
 * @ORM\Table(name="score")
 */
class Score
{
    private $id;
    private $score;
    private $created_at;
}