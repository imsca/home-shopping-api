<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Varejo;
use App\Entity\Produto;
use App\Entity\Pedido;
use App\Entity\Pagamento;
use App\Entity\FormaPagamento;
use App\Entity\ItemPedido;
use App\Entity\Consumidor;

class PedidoController extends Controller {

    /**
     * @Route("/pedido", name="pedido_add", methods={"POST", "OPTIONS"})
     */
    public function pedidoAdd(Request $request) {
        if($request->getMethod() !== "OPTIONS") {
            $db = $this->getDoctrine()->getManager();
            $repoProduto = $this->getDoctrine()->getRepository(Produto::class);
            $json = json_decode($request->getContent());
            $pedido = new Pedido();
            $pagamento = new Pagamento();
            $pedido->setConsumidor($this->getDoctrine()->getRepository(Consumidor::class)->find($json->consumidor->id));
            $pedido->setVarejo($this->getDoctrine()->getRepository(Varejo::class)->find($json->varejo->id));
            $pedido->setFormaPagamento($this->getDoctrine()->getRepository(FormaPagamento::class)->find($json->formaPagamento->id));
            $pagamento->setValor($json->pagamento->valor);
            $pagamento->setTroco($json->pagamento->troco);
            $pedido->setPagamento($pagamento);
            $pedido->setDataPedido(new \DateTime($json->dataPedido, new \DateTimeZone("America/Sao_Paulo")));
            $pedido->setTotal($json->total);
            $pedido->setStatus(false);
            $db->persist($pagamento);
            $db->persist($pedido);
            foreach($json->produtos as $produto) {
                $itemPedido = new ItemPedido();
                $itemPedido->setValor($produto->preco);
                $itemPedido->setPedido($pedido);
                $itemPedido->setProduto($repoProduto->find($produto->id));
                $itemPedido->setQuantidade($produto->quantidade);
                $db->persist($itemPedido);
            }
            $db->flush();
            return $this->json($pedido);
        } else {
            return new Response("");
        }
    }

    /**
     * @Route("/pedido/consumidores/{id}", name="pedido_consultar_consumidor", methods={"GET"})
     */
    public function getPedidoConsumidor(int $id) {
        $pedidos = $this->getDoctrine()->getRepository(Pedido::class)->findPedidos($id);
        return $this->json($pedidos);
    }

    /**
     * @Route("/pedido", name="pedido_consultar", methods={"GET"})
     */
    public function getPedidos() {
        return $this->json($this->getDoctrine()->getRepository(Pedido::class)->findAll());
    }
    /**
     * @Route("/itempedido/{id}", name="itempedido_consultar_id", methods={"GET"})
     */
    public function getItemPedido(int $id) {
        return $this->json($this->getDoctrine()->getRepository(ItemPedido::class)->findItensPedido($id));
    }

    /**
     * @Route("/itempedido", name="itempedido_consultar", methods={"GET"})
     */
    public function getItemPedidos() {
        return $this->json($this->getDoctrine()->getRepository(ItemPedido::class)->findAll());
    }
}