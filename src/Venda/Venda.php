<?php 
namespace Alura\DesignPattern\Venda;

use DateTimeInterface;

abstract class Venda
{
    public $dataRealizacao;

    public function __construct(DateTimeInterface $dataRealizacao)
    {
        $this->dataRealizacao = $dataRealizacao;
    }
}