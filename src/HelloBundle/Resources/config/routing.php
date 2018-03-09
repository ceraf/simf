<?php

    use Symfony\Component\Routing\RouteCollection;
    use Symfony\Component\Routing\Route;
    
    $collection = new RouteCollection();
    $collection->add('hello', new Route('/hello/{name}', [
        '_controller' => 'HelloBundle:Hello:index'
    ]));
    
    $collection->add('hello_world', new Route('/hello_world', [
        '_controller' => 'HelloBundle:Hello:hello'
    ]));
	
    $collection->add('prd_list', new Route('/prd_list', [
        '_controller' => 'HelloBundle:Product:list'
    ]));
    
    $collection->add('prd_show', new Route('/prd_show/{id}', [
        '_controller' => 'HelloBundle:Product:show'
    ]));
    
    return $collection;
    