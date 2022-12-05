<?php

namespace App\Entity;

use App\Repository\BooksRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: BooksRepository::class)]
class Books
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Assert\Length(min:2, max : 100)]
    private ?string $name = null;

    


    #[ORM\Column]
    #[Assert\Positive()]
    #[Assert\LessThan(10)]

    private ?float $price = null;

    #[ORM\Column(length: 100)]
    #[ORM\Column(length: 100)]
    #[Assert\Length(min:2, max : 100)]
    private ?string $name_author = null;

    #[ORM\Column]
#[Assert\NotBlank()]
    private ?\DateTimeImmutable $publishedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getNameAuthor(): ?string
    {
        return $this->name_author;
    }

    public function setNameAuthor(string $name_author): self
    {
        $this->name_author = $name_author;

        return $this;
    }

    public function getPublishedAt(): ?\DateTimeImmutable
    {
        return $this->publishedAt;
    }

    public function setPublishedAt(\DateTimeImmutable $publishedAt): self
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }
}
