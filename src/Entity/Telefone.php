<?php


namespace Alura\Doctrine\Entity;

/**
 * @Entity
 */
class Telefone
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private $numero;
    /**
     * @ManyToOne(targetEntity="Aluno")
     */
    private $aluno;


    public function getAluno(): Aluno
    {
        return $this->aluno;
    }

    public function setAluno(Aluno $aluno)
    {
        $this->aluno = $aluno;
        return $this;
    }

    public function getId(): id
    {
        return $this->id;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;
        return $this;
    }
}