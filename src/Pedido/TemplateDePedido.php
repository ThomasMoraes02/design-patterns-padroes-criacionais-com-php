<?php 
namespace Alura\DesignPattern\Pedido;

class TemplateDePedido
{
    private $nomeCliente;
    private $data;
    
    public function __construct($nomeCliente, $data)
    {
        $this->nomeCliente = $nomeCliente;
        $this->data = $data;
    }
    
    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }
    
    public function getData()
    {
        return $this->data;
    }
}