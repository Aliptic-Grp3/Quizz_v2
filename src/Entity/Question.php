<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionRepository")
 */
class Question
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $Sujet;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Themes", inversedBy="questions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Theme;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSujet(): ?string
    {
        return $this->Sujet;
    }

    public function setSujet(string $Sujet): self
    {
        $this->Sujet = $Sujet;

        return $this;
    }

    public function getTheme(): ?Themes
    {
        return $this->Theme;
    }

    public function setTheme(?Themes $Theme): self
    {
        $this->Theme = $Theme;

        return $this;
    }

    public function __toString()
    {
        return $this->Sujet;
    }
}
