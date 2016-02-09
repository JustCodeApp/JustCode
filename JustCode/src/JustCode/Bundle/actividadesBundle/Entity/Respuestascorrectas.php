<?php

namespace JustCode\Bundle\actividadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Respuestascorrectas
 *
 * @ORM\Table(name="respuestascorrectas", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_6393C1B21F5FEDB5", columns={"respuesta_ok"})}, indexes={@ORM\Index(name="IDX_6393C1B2FE3B0D62", columns={"id_pregunta"})})
 * @ORM\Entity
 */
class Respuestascorrectas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
     public function __toString()
    {
        return strval($this->id);
    }

    /**
     * @var string
     *
     * @ORM\Column(name="respuesta_ok", type="string", length=250, nullable=false)
     */
    private $respuestaOk;

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
     * Set respuestaOk
     *
     * @param string $respuestaOk
     *
     * @return Respuestascorrectas
     */
    public function setRespuestaOk($respuestaOk)
    {
        $this->respuestaOk = $respuestaOk;

        return $this;
    }

    /**
     * Get respuestaOk
     *
     * @return string
     */
    public function getRespuestaOk()
    {
        return $this->respuestaOk;
    }

    /**
     * Set idPregunta
     *
     * @param \JustCode\Bundle\actividadesBundle\Entity\Preguntas $idPregunta
     *
     * @return Respuestascorrectas
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
