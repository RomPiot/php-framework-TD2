<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Doctrine\ORM\Mapping\Entity()
 * @ORM\Table(name="game")
 */
class Game
{
    private $id;
    private $name;
    private $image;

}