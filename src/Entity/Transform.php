<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TransformRepository")
 */
class Transform
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $transform;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTransform(): ?string
    {
        return $this->transform;
    }

    public function setTransform(string $transform): self
    {
        $this->transform = $transform;

        return $this;
    }
}
