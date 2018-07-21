<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('sacprd_page_list', new Route('/admin/pages', array(
    '_controller' => 'SacprdPageBundle:Adminpages:list',
)));

$collection->add('sacprd_page_edit', new Route('/admin/page/{id}', array(
    '_controller' => 'SacprdPageBundle:Adminpages:edit',
	'id' => 0
)));

return $collection;
