<?php

namespace HelloBundle\Controller;
    
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use HelloBundle\Entity\Task;

class HelloController extends Controller
{
    public function indexAction($name)
    {
        //return new Response('<html><body>Hello '.$name.'!</body></html>');
        return $this->render('HelloBundle:Hello:index.html.php', array('name' => $name));
    }
    
    public function helloAction(Request $Request)
    {
        /*
        $response = $this->forward('HelloBundle:Hello:index', array(
            'name' => '1234',
        ));
        */
        var_dump($this->get('security.context')->getToken()->getUser());
        $url = $this->get('router')->generate('hello', ['name' => 45675467], true);
       // var_dump($url);
        
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));
        
        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->getForm();
            
        return $this->render('HelloBundle:Hello:new.html.php', array(
            'form' => $form->createView(),
        ));
        
     //   return $response;
        
      //  var_dump($Reque
	}
}
