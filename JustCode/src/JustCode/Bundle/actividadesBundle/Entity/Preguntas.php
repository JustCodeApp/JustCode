<?php

namespace JustCode\Bundle\actividadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preguntas
 *
 * @ORM\Table(name="preguntas", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_38794855E41428B9", columns={"id_correcta"})})
 * @ORM\Entity
 */
class Preguntas
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
     * @ORM\Column(name="enunciado", type="string", length=250, nullable=false)
     */
    private $enunciado;

    /**
     * @var string
     *
     * @ORM\Column(name="dificultad", type="string", length=5, nullable=false)
     */
    private $dificultad;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_nivel", type="integer", nullable=false)
     */
    private $idNivel;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_correcta", type="integer", nullable=false)
     */
    private $idCorrecta;



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
     * Set dificultad
     *
     * @param string $dificultad
     *
     * @return Preguntas
     */
    public function setDificultad($dificultad)
    {
        $this->dificultad = $dificultad;

        return $this;
    }

    /**
     * Get dificultad
     *
     * @return string
     */
    public function getDificultad()
    {
        return $this->dificultad;
    }

    /**
     * Set idNivel
     *
     * @param integer $idNivel
     *
     * @return Preguntas
     */
    public function setIdNivel($idNivel)
    {
        $this->idNivel = $idNivel;

        return $this;
    }

    /**
     * Get idNivel
     *
     * @return integer
     */
    public function getIdNivel()
    {
        return $this->idNivel;
    }

    /**
     * Set idCorrecta
     *
     * @param integer $idCorrecta
     *
     * @return Preguntas
     */
    public function setIdCorrecta($idCorrecta)
    {
        $this->idCorrecta = $idCorrecta;

        return $this;
    }

    /**
     * Get idCorrecta
     *
     * @return integer
     */
    public function getIdCorrecta()
    {
        return $this->idCorrecta;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return Preguntas
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
