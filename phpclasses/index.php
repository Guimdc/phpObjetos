<?php
/**
 * @author Guilherme Dal Castel
 * @version 1.0
 */

require_once "pessoa.php";
require_once "medico.php";
require_once "engenheiro.php";

$medico = new Medico();
$medico->setNome("Guilherme");
$medico->setDataNascimento("30/06/2004");
$medico->setCPF("938.281.037-78");
$medico->setRG("829108493");
$medico->setCrm("739164910");

$engenheiro = new Engenheiro();
$engenheiro->setNome("Cristian");
$engenheiro->setDataNascimento("20/11/2004");
$engenheiro->setCPF("721.938.901-23");
$engenheiro->setRG("739176378");
$engenheiro->setCrea("Engenheiro eléctrico");


echo "<b>Engenheiro</b>";
echo "<br>";
echo "Nome: " . $engenheiro->getNome();
echo "<br>";
echo "Data de nascimento: " . $engenheiro->getDataNascimento();
echo "<br>";
echo "CPF: " . $engenheiro->getCPF();
echo "<br>";
echo "RG: " . $engenheiro->getRG();
echo "<br>";
echo "CREA: " . $engenheiro->getCrea();
echo "<br>";
echo "<br>";
echo "<b>Médico</b>";
echo "<br>";
echo "Nome: " . $medico->getNome();
echo "<br>";
echo "Data de nascimento: " . $medico->getDataNascimento();
echo "<br>";
echo "CPF: " . $medico->getCPF();
echo "<br>";
echo "RG: " . $medico->getRG();
echo "<br>";
echo "CRM: " . $medico->getCrm();
echo "<br>";
?>