<?php 
namespace Alura\DesignPattern\Venda;

use Alura\DesignPattern\Impostos\Imposto;

interface VendaFactory
{
    public function criaVenda(): Venda;
    public function criaImposto(): Imposto;
}