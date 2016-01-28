<?php

namespace JustCode\Bundle\actividadesBundle\Entity;

/**
 * Respuestas
 */
class Respuestas
{
    public function __toString(){
        return strval($this->idrespuestas);
    }
    /**
     * @var integer
     */
    private $idrespuestas;

    /**
     * @var string
     */
    private $textoRespuesta;

    /**
     * @var boolean
     */
    private $correcta;

    /**
     * @var \JustCode\Bundle\actividadesBundle\Entity\Preguntas
     */
    private $preguntaspreguntas;

    /**
     * @var \JustCode\Bundle\actividadesBundle\Entity\Niveles
     */
    private $nivelesniveles;


    /**
     * Set idrespuestas
     *
     * @param integer $idrespuestas
     *
     * @return Respuestas
     */
    public function setIdrespuestas($idrespuestas)
    {
        $this->idrespuestas = $idrespuestas;

        return $this;
    }

    /**
     * Get idrespuestas
     *
     * @return integer
     */
    public function getIdrespuestas()
    {
        return $this->idrespuestas;
    }

    /**
     * Set textoRespuesta
     *
     * @param string $textoRespuesta
     *
     * @return Respuestas
     */
    public function setTextoRespuesta($textoRespuesta)
    {
        $this->textoRespuesta = $textoRespuesta;

        return $this;
    }

    /**
     * Get textoRespuesta
     *
     * @return string
     */
    public function getTextoRespuesta()
    {
        return $this->textoRespuesta;
    }

    /**
     * Set correcta
     *
     * @param boolean $correcta
     *
     * @return Respuestas
     */
    public function setCorrecta($correcta)
    {
        $this->correcta = $correcta;

        return $this;
    }

    /**
     * Get correcta
     *
     * @return boolean
     */
    public function getCorrecta()
    {
        return $this->correcta;
    }

    /**
     * Set preguntaspreguntas
     *
     * @param \JustCode\Bundle\actividadesBundle\Entity\Preguntas $preguntaspreguntas
     *
     * @return Respuestas
     */
    public function setPreguntaspreguntas(\JustCode\Bundle\actividadesBundle\Entity\Preguntas $preguntaspreguntas = null)
    {
        $this->preguntaspreguntas = $preguntaspreguntas;

        return $this;
    }

    /**
     * Get preguntaspreguntas
     *
     * @return \JustCode\Bundle\actividadesBundle\Entity\Preguntas
     */
    public function getPreguntaspreguntas()
    {
        return $this->preguntaspreguntas;
    }

    /**
     * Set nivelesniveles
     *
     * @param \JustCode\Bundle\actividadesBundle\Entity\Niveles $nivelesniveles
     *
     * @return Respuestas
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

