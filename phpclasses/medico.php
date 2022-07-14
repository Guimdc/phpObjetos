<?php

require_once "pessoa.php";

/**
 * Classe Medico que herda Pessoa
 * @author Guilherme Dal Castel
 * @version 1.0
 */
class Medico extends Pessoa{
    /**
     * Variável recebe crm
     * @param String
     * @access private
     */
    private $crm;

    /**
     * Função set crm
     * @param String
     */
    public function setCrm($crm){
        $this->crm = $crm;
    }

    /**
     * Função get crm
     * @return String
     */
    public function getCrm(){
        return $this->crm;
    }

}