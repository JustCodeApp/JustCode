<?php

namespace JustCode\Bundle\actividadesBundle\Entity;

/**
 * Niveles
 */
class Niveles
{
    public function __toString(){
        return strval($this->idniveles);
    }
    /**
     * @var integer
     */
    private $idniveles;

    /**
     * @var string
     */
    private $textoNivel;


    /**
     * Get idniveles
     *
     * @return integer
     */
    public function getIdniveles()
    {
        return $this->idniveles;
    }

    /**
     * Set textoNivel
     *
     * @param string $textoNivel
     *
     * @return Niveles
     */
    public function setTextoNivel($textoNivel)
    {
        $this->textoNivel = $textoNivel;

        return $this;
    }

    /**
     * Get textoNivel
     *
     * @return string
     */
    public function getTextoNivel()
    {
        return $this->textoNivel;
    }
}

