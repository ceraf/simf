<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('sacprd_core_homepage', new Route('/hello/{name}', array(
    '_controller' => 'SacprdCoreBundle:Default:index',
)));

$collection->add('sacprd_core_login', new Route('/login', array(
    '_controller' => 'SacprdCoreBundle:Auth:login',
)));

$collection->add('login_check', new Route('/login_check', array()));

return $collection;
