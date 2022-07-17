<?php 
namespace Alura\DesignPattern\Log;

class StdoutLogWritter implements LogWritter
{
    public function escreve(string $mensagemFormatada)
    {
        echo $mensagemFormatada;
    }
}