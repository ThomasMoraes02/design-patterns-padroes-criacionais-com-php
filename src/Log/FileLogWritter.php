<?php 
namespace Alura\DesignPattern\Log;

class FileLogWritter implements LogWritter
{
    private $arquivo;

    public function __construct($caminhoArquivo)
    {
        $this->arquivo = fopen($caminhoArquivo, 'a+');
    }

    public function escreve(string $mensagemFormatada)
    {
        fwrite($this->arquivo, $mensagemFormatada);
    }

    public function __destruct()
    {
        fclose($this->arquivo);
    }
}