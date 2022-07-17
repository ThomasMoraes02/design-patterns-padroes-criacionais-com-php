<?php 
namespace Alura\DesignPattern\Log;

class FileLogManager extends LogManager
{
    private $caminhoArquivo;

    public function __construct($caminhoArquivo)
    {
        $this->caminhoArquivo = $caminhoArquivo;
    }

    public function criarLogWritter()
    {
        return new FileLogWritter($this->caminhoArquivo);
    }
}