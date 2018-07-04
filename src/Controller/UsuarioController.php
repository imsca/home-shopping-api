<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Usuario;
use App\Entity\Consumidor;
use App\Entity\Endereco;
use App\Entity\Varejo;

class UsuarioController extends Controller {


    /**
     * @Route("/consumidores", name="consumidor_lista", methods={"GET"})
     */
    public function getUsuarioConsumidores(Request $request) {
        $consumidores = $this->getDoctrine()->getRepository(Consumidor::class)->findAll();
        return $this->json($consumidores);
    }
    
    /**
     * @Route("/varejos", name="varejo_lista", methods={"GET"})
     */
    public function getUsuarioVarejos(Request $request) {
        $varejos = $this->getDoctrine()->getRepository(Varejo::class)->findAll();
        return $this->json($varejos);
    }

    /**
     * @Route("/varejos/{id}", name="unico", methods={"GET"})
     */
    public function getUsuarioVarejo(Request $request, int $id) {
        $varejos = $this->getDoctrine()->getRepository(Varejo::class)->find($id);
        return $this->json($varejos);
    }

    /**
     * @Route("/consumidores/{id}", name="consumidor_unico", methods={"GET"})
     */
    public function getUsuarioConsumidor(Request $request, int $id) {

    }
    
    /**
     * @Route("/consumidores", name="consumidor_logar", methods={"POST"})
     */
    public function logarUsuarioConsumidor(Request $request) {

    }
    
    /**
     * @Route("/consumidores/add", name="consumidor_adicionar", methods={"POST", "OPTIONS"})
     */
    public function consumidorAdicionar(Request $request) {
        if($request->getMethod() !== "OPTIONS"){
            $json = json_decode($request->getContent());
            $db = $this->getDoctrine()->getManager();
            $consumidor = new Consumidor();
            $usuario = new Usuario();
            $endereco = new Endereco();
            
    
            $consumidor->setRg($json->rg);
            $consumidor->setCpf($json->cpf);
            $consumidor->setNome(trim("$json->nome $json->sobrenome"));
            $consumidor->setSexo($json->sexo);
            $consumidor->setTelefone($json->telefone);
            $consumidor->setNascimento(new \DateTime($json->nascimento));
    
            $endereco->setLogradouro($json->endereco->logradouro);
            $endereco->setCidade($json->endereco->cidade);
            $endereco->setUf($json->endereco->uf);
            $endereco->setBairro($json->endereco->bairro);
            $endereco->setCep($json->endereco->cep);
            $endereco->setNumero($json->endereco->numero);
    
            if(isset($json->endereco->complemento)){
                $endereco->setComplemento($json->endereco->complemento);
            }
            
            $usuario->setLogin($json->usuario->login);
            $usuario->setSenha($json->usuario->senha);
            $usuario->setEmail($json->usuario->email);
            $usuario->setRole("consumer");
    
            $consumidor->setEndereco($endereco);
            $consumidor->setUsuario($usuario);
    
            $db->persist($endereco);
            $db->persist($usuario);
            $db->persist($consumidor);
            $db->flush();
    
            return $this->json($consumidor);
        } else {
            return new Response("");
        }

    }

        /**
     * @Route("/varejos/add", name="varejo_adicionar", methods={"POST"})
     */
    public function varejoAdicionar(Request $request) {
        $json = json_decode($request->getContent());
        $db = $this->getDoctrine()->getManager();
        $varejo = new Varejo();
        $usuario = new Usuario();
        $endereco = new Endereco();
        

        $varejo->setCnpj($json->cnpj);
        $varejo->setNome($json->nome);
        $varejo->setFantasia($json->fantasia);
        $varejo->setArea($json->area);
        $varejo->setTelefone($json->telefone);
        $varejo->setResponsavel($json->responsavel);

        $endereco->setLogradouro($json->endereco->logradouro);
        $endereco->setCidade($json->endereco->cidade);
        $endereco->setUf($json->endereco->uf);
        $endereco->setBairro($json->endereco->bairro);
        $endereco->setCep($json->endereco->cep);
        $endereco->setNumero($json->endereco->numero);

        if(isset($json->endereco->complemento)){
            $endereco->setComplemento($json->endereco->complemento);
        }
        
        $usuario->setLogin($json->usuario->login);
        $usuario->setSenha($json->usuario->senha);
        $usuario->setEmail($json->usuario->email);
        $usuario->setRole("retail");

        $varejo->setEndereco($endereco);
        $varejo->setUsuario($usuario);

        $db->persist($endereco);
        $db->persist($usuario);
        $db->persist($varejo);
        $db->flush();

        return $this->json($varejo);
    }

    /**
     * @Route("/consumidores/auth", name="consumidor_autenticacao", methods={"POST", "OPTIONS"})
     */
    public function getConsumidorAuth(Request $request) {
        if($request->getMethod() !== "OPTIONS") {
            $json = json_decode($request->getContent());
            $consumidor = $this->getDoctrine()->getRepository(Consumidor::class)->findUser($json);
            return $this->json(array_pop($consumidor));
        } else {
            return new Response("");
        }
    }

}

?>