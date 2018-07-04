<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsuarioRepository")
 */
class Usuario
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $senha;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $role;

    public function getId() {
        return $this->id;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin(string $login) {
        $this->login = $login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha(string $senha) {
        $this->senha = $senha;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }
    public function getRole() {
        return $this->role;
    }

    public function setRole(string $role) {
        $this->role = $role;
    }

}
