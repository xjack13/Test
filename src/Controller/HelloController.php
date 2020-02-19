<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController
{
    /**
     * @Route(path="/hi/{name}", name="hello")
     * @param string $name
     * @param Request $request
     * @return Response
     * 
     */
    
    public function hello(string $name, Request $request): Response
    {
        $helloText = "Cze ".$name;
        $param1 = $request->get('param1','wartosc');
//        $param1 = isset($_GET['param1']) ? $_GET['param1'] : '';
        return new Response('<html><body><h1>'.$helloText.'</h1><p>'.$param1.'</p></body></html>');
    }
    
    /**
     * 
     * @Route(path="/redirect/{action}")
     * @param string $action
     * @return RedirectResponse
     * @throws \Exception
     */
    public function moveToAction(string $action): RedirectResponse
    {
        if('hello' == $action){
            return $this->redirectToRoute('hello', ['name'=>'Some name']);
        }else if('currentDate' == $action) {
            return $this->redirectToRoute("currentDate");
        }
        throw new \Exception("Wrong");
    }
   
    
}

