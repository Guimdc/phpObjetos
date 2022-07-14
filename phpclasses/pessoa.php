<?php
 /**
  * Classe Pessoa
  * @author Guilherme Dal Castel
  * @version 1.0
  */
class Pessoa{
    /**
     * Variável recebe nome
     * @param String
     * @access private
     */
    private $nome;
    /**
     * Variável recebe dataNascimento
     * @param String
     * @access private
     */
    private $dataNascimento;
    /**
     * Variável recebe cpf
     * @param String
     * @access private
     */
    private $cpf;
    /**
     * Variável recebe rg
     * @param String
     * @access private
     */
    private $rg;

    /**
     * Função set nome
     * @param String
     */
    public function setNome($nome){
        $this->nome = $nome;
    }

        /**
     * Função get nome
     * @return String
     */
    public function getNome(){
        return $this->nome;
    }

        /**
     * Função set dataNascimento
     * @param String
     */
    public function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }

    /**
     * Função get dataNascimento
     * @return String
     */
    public function getDataNascimento(){
        return $this->dataNascimento;
    }

        /**
     * Função set cpf
     * @param String
     */
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    /**
     * Função get cpf
     * @return String
     */
    public function getCpf(){
        return $this->cpf;
    }

        /**
     * Função set rg
     * @param String
     */
    public function setRg($rg){
        $this->rg = $rg;
    }

    /**
     * Função get rg
     * @return String
     */
    public function getRg(){
        return $this->rg;
    }

}