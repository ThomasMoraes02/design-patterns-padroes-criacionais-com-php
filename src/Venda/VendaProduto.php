<?php 
namespace Alura\DesignPattern\Venda;

use DateTimeInterface;
use Alura\DesignPattern\Venda\Venda;

class VendaProduto extends Venda
{
    private $pesoProduto;

    public function __construct(DateTimeInterface $dataRealizacao, int $pesoProduto)
    {
        // Acessando construtor da classe pai
        parent::__construct($dataRealizacao);
        $this->pesoProduto = $pesoProduto;
    }
}