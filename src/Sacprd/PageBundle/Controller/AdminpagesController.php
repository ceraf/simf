<?php

namespace Sacprd\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sacprd\PageBundle\Entity\Category;

class AdminpagesController extends Controller
{
    public function listAction()
    {
		$categories = $this->getDoctrine()
					->getRepository('Sacprd\PageBundle\Entity\Category')
					->findBy(array(), array('name' => 'ASC'));
        return $this->render('SacprdPageBundle:List:categories.html.twig', array('categories' => $categories));
    }
	
	public function editAction()
	{
	;
	}
}
