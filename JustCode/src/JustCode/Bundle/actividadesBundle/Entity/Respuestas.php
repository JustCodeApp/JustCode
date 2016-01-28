<?php

namespace JustCode\Bundle\actividadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Respuestas
 *
 * @ORM\Table(name="respuestas", indexes={@ORM\Index(name="IDX_5CD06EB1FE3B0D62", columns={"id_pregunta"})})
 * @ORM\Entity
 */
class Respuestas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="enunciado", type="string", length=250, nullable=false)
     */
    private $enunciado;

    /**
     * @var \JustCode\Bundle\actividadesBundle\Entity\Preguntas
     *
     * @ORM\ManyToOne(targetEntity="JustCode\Bundle\actividadesBundle\Entity\Preguntas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pregunta", referencedColumnName="id")
     * })
     */
    private $idPregunta;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set enunciado
     *
     * @param string $enunciado
     *
     * @return Respuestas
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
     * Set idPregunta
     *
     * @param \JustCode\Bundle\actividadesBundle\Entity\Preguntas $idPregunta
     *
     * @return Respuestas
     */
    public function setIdPregunta(\JustCode\Bundle\actividadesBundle\Entity\Preguntas $idPregunta = null)
    {
        $this->idPregunta = $idPregunta;

        return $this;
    }

    /**
     * Get idPregunta
     *
     * @return \JustCode\Bundle\actividadesBundle\Entity\Preguntas
     */
    public function getIdPregunta()
    {
        return $this->idPregunta;
    }
}
