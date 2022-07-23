<?php
namespace Alura\DesignPattern\Venda;

use DateTimeImmutable;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Imposto;
use Alura\DesignPattern\Venda\VendaProduto;

class VendaProdutoFactory implements VendaFactory
{
    private $pesoProduto;

    public function __construct(int $pesoProduto)
    {
        $this->pesoProduto = $pesoProduto;
    }

    public function criaVenda(): Venda
    {
        return new VendaProduto(new DateTimeImmutable(), $this->pesoProduto);
    }
    
    public function criaImposto(): Imposto
    {
        return new Icms();
    }
}