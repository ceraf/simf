<?php

namespace HelloBundle\Controller;
    
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use HelloBundle\Entity\Product;

class ProductController extends Controller
{
    public function listAction()
    {
        /*
        $product = new Product();
        $product->setName('A Foo Bar');
        $product->setPrice('19.99');
        $product->setDescription('Lorem ipsum dolor');

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($product);
        $em->flush();
        */
        return new Response('Hello product!');
    }
    
    public function showAction($id)
    {
        $product = $this->getDoctrine()
            ->getRepository('HelloBundle:Product')
            ->find($id);
            
        if (!$product) {
            throw $this->createNotFoundException('No product found for id = '.$id);
        }
        
        return new Response("Hello product '".$product->getName()."'!");
    }
}
