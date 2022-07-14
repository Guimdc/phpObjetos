<?php

require_once "pessoa.php";

/**
 * Classe Engenheiro que herda Pessoa
 * @author Guilherme Dal Castel
 * @version 1.0
 */
class Engenheiro extends Pessoa{
    /**
     * Variável recebe crea
     * @param String
     * @access private
     */
    private $crea;

    /**
     * Função set crea
     * @param String
     */
    public function setCrea($crea){
        $this->crea = $crea;
    }

    /**
     * Função get crea
     * @return String
     */
    public function getCrea(){
        return $this->crea;
    }

}