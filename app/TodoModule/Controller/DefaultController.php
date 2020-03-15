<?php
namespace app\TodoModule\Controller;

use app\TodoModule\Entity\Task;
use framework\core\Controller\AppController;

class DefaultController extends AppController
{
    /**
    * index command
    */
    public function indexCommand(){
        $em = $this->getEntityManager();
        $task = new Task();
        $form = $this->buildForm('Todo:Task', $task);

        if($form->isPosted()){
            $em->persist($task);
            $em->flush();
            
            $this->redirectToRoute('index_route');
        }

        $tasks = $this->getRepository('Todo:Task')->findAll();
        $this->paintView('Todo:index.html.twig', [
            'form' => $form,
            'tasks' => $tasks
        ]);
    }
    
    public function deleteCommand($id){
        $em = $this->getEntityManager();
        $task = $this->getRepository('Todo:Task')->find($id);
        $em->remove($task);
        $em->flush();

        $this->redirectToRoute('index_route');
    }
}