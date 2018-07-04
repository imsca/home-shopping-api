<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Varejo;
use App\Entity\Produto;
class ProdutoController extends Controller {

    /**
     * @Route("/varejos/{id}/produtos", name="produto_lista", methods={"GET"})
     */
    public function getProdutos(int $id) { 
        /*$produtos = $this->getDoctrine()->getRepository(Produto::class)->findBy([
            'varejo' => $id
        ]);*/
        $produtos = $this->getDoctrine()->getRepository(Produto::class)->findProducts($id);
        return $this->json($produtos);
    }

    /**
     * @Route("/varejos/{id}/produtos", name="produto_adicionar", methods={"POST", "OPTIONS"})
     */
    public function produtoAdicionar(Request $request, int $id) {
        if($request->getMethod() !== "OPTIONS") {

        }
        $json = json_decode($request->getContent());
        $db = $this->getDoctrine()->getManager();
        $varejo = $this->getDoctrine()->getRepository(Varejo::class)->find($id);
        $produto = new Produto();
        
        $produto->setCodigoBarras($json->codigoBarras);
        $produto->setNome($json->nome);
        $produto->setPreco($json->preco);
        $produto->setMarca($json->marca);
        $produto->setImagem($json->imagem);
        $produto->setQuantidade($json->quantidade);
        $produto->setStatus($json->status);
        $produto->setUnidade($json->unidade);
        $produto->setCategoria($json->categoria);
        $produto->setVarejo($varejo);

        $db->persist($produto);
        $db->flush();

        return $this->json($produto);
    }

}

?>