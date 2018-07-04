<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Varejo;
/**
 * @ORM\Entity(repositoryClass="App\Repository\ProdutoRepository")
 */
class Produto
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=13)
     */
    private $codigoBarras;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $nome;

    /**
    * @ORM\Column(type="string", length=6)
    */
    private $unidade;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $preco;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantidade;

    /**
     * @ORM\Column(type="string")
     */
    private $imagem;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $marca;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $categoria;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Varejo")
     * @ORM\JoinColumn(name="varejo_id", referencedColumnName="id")
     */
    private $varejo;

    public function getId() {
        return $this->id;
    }
    
    public function getCodigoBarras() {
        return $this->codigoBarras;
    }

    public function setCodigoBarras(string $codigoBarras) {
        $this->codigoBarras = $codigoBarras;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function getUnidade() {
        return $this->unidade;
    }

    public function setUnidade(string $unidade) {
        $this->unidade = $unidade;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function setImagem(string $imagem) {
        $this->imagem = $imagem;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca(string $marca) {
        $this->marca = $marca;

        return $this;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria(string $categoria) {
        $this->categoria = $categoria;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getVarejo() {
        return $this->varejo;
    }

    public function setVarejo(Varejo $varejo) {
        $this->varejo = $varejo;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

}
