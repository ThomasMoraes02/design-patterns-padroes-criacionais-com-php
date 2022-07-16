<?php 
namespace Alura\DesignPattern\Pedido;

use DateTimeImmutable;
use Alura\DesignPattern\Pedido\Pedido;
use Alura\DesignPattern\Pedido\TemplateDePedido;

class CriadorDePedidos
{
    private $templates;

    public function criaPedido($nomeCliente, $dataFormatada, $orcamento)
    {
        $template = new TemplateDePedido($nomeCliente, new DateTimeImmutable($dataFormatada));
        $pedido = new Pedido();
        $pedido->template = $template;
        $pedido->orcamento = $orcamento;

        return $pedido;
    }

    private function gerarTemplatePedido($nomeCliente, $dataFormatada)
    {
        $hash = md5($nomeCliente . $dataFormatada); 
        
        if(!array_key_exists($hash, $this->templates)) {
            $template = new TemplateDePedido($nomeCliente, new DateTimeImmutable($dataFormatada));
            $this->templates[$hash] = $template;
        }

        return $this->templates[$hash];
    }
}