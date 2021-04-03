<?php

namespace App\Entity;

use App\Repository\UserEntityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserEntityRepository::class)
 */
class UserEntity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=130)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $email;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isFirstLoggin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getIsFirstLoggin(): ?bool
    {
        return $this->isFirstLoggin;
    }

    public function setIsFirstLoggin(?bool $isFirstLoggin): self
    {
        $this->isFirstLoggin = $isFirstLoggin;

        return $this;
    }
}
