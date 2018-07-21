<?php

namespace Sacprd\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sacprd\PageBundle\Entity\Category;
use Sacprd\PageBundle\Form\CategoryForm;
use Symfony\Component\HttpFoundation\Request;

class AdminpagesController extends Controller
{
    public function listAction()
    {
		$categories = $this->getDoctrine()
					->getRepository('Sacprd\PageBundle\Entity\Category')
					->findBy(array(), array('title' => 'ASC'));
        return $this->render('SacprdPageBundle:Categories:adm_list.html.twig', array('categories' => $categories));
    }
	
	public function editAction($id, Request $request)
	{
		$category = $this->getDoctrine()
					->getRepository('Sacprd\PageBundle\Entity\Category')
					->find($id);
        
        $form = $this->createForm(new CategoryForm(), $category);

        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($form->getData());
                $em->flush();
                
                return $this->redirect($this->generateUrl('sacprd_page_list'));
            }
        }
        
        return $this->render('SacprdPageBundle:Categories:adm_edit_test.html.twig', array(
            'form' => $form->createView(),
        ));
        
        /*
$author = new Acme\BlogBundle\Entity\Author();
$form = $this->createForm(new AuthorType(), $author);
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
        if ($form->isValid()) {

            $this->redirect($this->generateUrl('...'));
        }
}
return $this->render('BlogBundle:Author:form.html.twig', array(
'form' => $form->createView(),
));
		$category = $this->getDoctrine()
					->getRepository('Sacprd\PageBundle\Entity\Category')
					->find($id);
        if (!$category) {
            throw $this->createNotFoundException('No category found for id '.$id);
            }
        return $this->render('SacprdPageBundle:Categories:adm_edit.html.twig', array('item' => $category));
*/
    }
}
