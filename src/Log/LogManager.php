<?php 
namespace Alura\DesignPattern\Log;

abstract class LogManager
{
    public function log($severidade, $mensagem)
    {
        $logWritter = $this->criarLogWritter();

        $dataHoje = date("d,/mq/Y");

        $mensagemFormatada = "[$dataHoje][$severidade]: $mensagem";
        $logWritter->escreve($mensagemFormatada);
    }

    abstract function criarLogWritter();
}