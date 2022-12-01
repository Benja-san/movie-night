<?php

namespace App\Entity;

use App\Repository\ProgramRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: ProgramRepository::class)]
#[UniqueEntity(
    fields : ['title'],
    message: "This title already exists"
    )]
class Program
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(
        message: "This field is mandatory"
    )]
    #[Assert\Length(
        max: 255,
        maxMessage: "Title {{ value }} is too long, it should not exceed {{ limit }} characters"
        )]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(
        message: "This field is mandatory"
    )]
    private ?string $synopsis = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Url(
        message: 'The url {{ value }} is not a valid url',
    )]
    #[Assert\Length(
        max: 255,
        maxMessage: "Url {{ value }} is too long, it should not exceed {{ limit }} characters"
        )]
    private ?string $poster = null;

    #[ORM\ManyToOne(inversedBy: 'programs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $category = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(
        message: "This field is mandatory"
    )]
    #[Assert\Length(
        max: 255,
        maxMessage: "Type {{ value }} is too long, it should not exceed {{ limit }} characters"
        )]
    private ?string $type = null;

    #[ORM\OneToMany(mappedBy: 'program', targetEntity: Season::class, orphanRemoval: true)]
    private Collection $seasons;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(
        message: "This field is mandatory"
    )]
    #[Assert\Length(max: 255)]
    private ?string $slug = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(
        message: "This field is mandatory"
    )]
    #[Assert\Url(
        message: 'The url {{ value }} is not a valid url',
    )]
    #[Assert\Length(
        max: 255,
        maxMessage: "Url {{ value }} is too long, it should not exceed {{ limit }} characters"
        )]
    private ?string $background = null;

    public function __construct()
    {
        $this->seasons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    public function setSynopsis(string $synopsis): self
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    public function getPoster(): ?string
    {
        return $this->poster;
    }

    public function setPoster(?string $poster): self
    {
        $this->poster = $poster;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, Season>
     */
    public function getSeasons(): Collection
    {
        return $this->seasons;
    }

    public function addSeason(Season $season): self
    {
        if (!$this->seasons->contains($season)) {
            $this->seasons->add($season);
            $season->setProgram($this);
        }

        return $this;
    }

    public function removeSeason(Season $season): self
    {
        if ($this->seasons->removeElement($season)) {
            // set the owning side to null (unless already changed)
            if ($season->getProgram() === $this) {
                $season->setProgram(null);
            }
        }

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getBackground(): ?string
    {
        return $this->background;
    }

    public function setBackground(string $background): self
    {
        $this->background = $background;

        return $this;
    }
}
