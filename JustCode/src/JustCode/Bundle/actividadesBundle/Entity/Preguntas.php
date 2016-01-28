<?php

namespace JustCode\Bundle\actividadesBundle\Entity;

/**
 * Preguntas
 */
class Preguntas
{
    public function __toString(){
        return strval($this->idpreguntas);
    }
    /**
     * @var integer
     */
    private $idpreguntas;

    /**
     * @var string
     */
    private $enunciado;

    /**
     * @var \JustCode\Bundle\actividadesBundle\Entity\Niveles
     */
    private $nivelesniveles;


    /**
     * Set idpreguntas
     *
     * @param integer $idpreguntas
     *
     * @return Preguntas
     */
    public function setIdpreguntas($idpreguntas)
    {
        $this->idpreguntas = $idpreguntas;

        return $this;
    }

    /**
     * Get idpreguntas
     *
     * @return integer
     */
    public function getIdpreguntas()
    {
        return $this->idpreguntas;
    }

    /**
     * Set enunciado
     *
     * @param string $enunciado
     *
     * @return Preguntas
     */
    public function setEnunciado($enunciado)
    {
        $this->enunciado = $enunciado;

        return $this;
    }

    /**
     * Get enunciado
     *
     * @return string
     */
    public function getEnunciado()
    {
        return $this->enunciado;
    }

    /**
     * Set nivelesniveles
     *
     * @param \JustCode\Bundle\actividadesBundle\Entity\Niveles $nivelesniveles
     *
     * @return Preguntas
     */
    public function setNivelesniveles(\JustCode\Bundle\actividadesBundle\Entity\Niveles $nivelesniveles = null)
    {
        $this->nivelesniveles = $nivelesniveles;

        return $this;
    }

    /**
     * Get nivelesniveles
     *
     * @return \JustCode\Bundle\actividadesBundle\Entity\Niveles
     */
    public function getNivelesniveles()
    {
        return $this->nivelesniveles;
    }
}