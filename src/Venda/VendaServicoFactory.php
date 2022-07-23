<?php 
namespace Alura\DesignPattern\Venda;

use DateTimeInterface;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Imposto;
use Alura\DesignPattern\Venda\VendaServico;

class VendaServicoFactory implements VendaFactory
{
    private $nomePrestador;

    public function __construct(string $nomePrestador)
    {
        $this->nomePrestador = $nomePrestador;
    }

    public function criaVenda(): Venda
    {
        return new VendaServico(new DateTimeInterface(), $this->nomePrestador);
    }
    
    public function criaImposto(): Imposto
    {
        return new Icms();
    }
}