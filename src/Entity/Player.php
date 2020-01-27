<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Doctrine\ORM\Mapping\Entity()
 * @ORM\Table(name="player")
 */
class Player
{
    private $id;
    private $username;
    private $email;
}