<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Varejo;
use App\Entity\FormaPagamento;

class FormaPagamentoController extends Controller {

    /**
     * @Route("/pagamento/forma", name="forma_pagamento_add", methods={"POST","OPTIONS"})
     */
    public function addFormaPagamento(Request $request) {
        if($request->getMethod() !== "OPTIONS") {
            $json = json_decode($request->getContent());
            $varejo = $this->getDoctrine()->getRepository(Varejo::class)->find($json->varejoId);
            $db = $this->getDoctrine()->getManager();
            $formaPagamento = new FormaPagamento();
            $formaPagamento->setVarejo($varejo);
            $formaPagamento->setDescricao($json->descricao);
            
            $db->persist($formaPagamento);
            $db->flush();
            return $this->json($formaPagamento);
        } else {
            return new Response("");
        }
    }
    
    /**
     * @Route("/pagamentos/formas/{id}/varejos", name="forma_pagamento_consultar_varejo", methods={"GET"})
     */
    public function getFormasPagamentosVarejo(int $id) {
        $formas = $this->getDoctrine()->getRepository(FormaPagamento::class)->findFormaByIdVarejo($id);
        return $this->json($formas);
    }

    /**
     * @Route("/pagamentos/formas", name="forma_pagamento_consultar", methods={"GET"})
     */
    public function getFormasPagamentos() {
        $formas = $this->getDoctrine()->getRepository(FormaPagamento::class)->findAll();
        return $this->json($formas);
    }
    
}