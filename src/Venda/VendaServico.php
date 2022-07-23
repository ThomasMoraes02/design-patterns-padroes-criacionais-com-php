<?php 
namespace Alura\DesignPattern\Venda;

use DateTimeInterface;
use Alura\DesignPattern\Venda\Venda;

class VendaServico extends Venda
{
    private $nomePrestador;

    public function __construct(DateTimeInterface $dataRealizacao, string $nomePrestador)
    {
        // Acessando construtor da classe pai
        parent::__construct($dataRealizacao);
        $this->nomePrestador = $nomePrestador;
    }
}