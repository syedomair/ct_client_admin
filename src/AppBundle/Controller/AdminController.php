<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route("/dashboard/{client_id}", name="dashboard")
     */
    public function dashboardAction(Request $request, $client_id)
    {
        // replace this example code with whatever you need
//        return $this->render('default/index.html.twig', array(
//            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
//        ));

        $api = $this->get('client_service')->findOrganizations('1');
        //$parameters = array('name'=>'test org1'); 
        //$api = $this->get('client_service')->createOrganization('1', $parameters);
        //var_dump($api);
        return $this->render('AppBundle:Admin:dashboard.html.twig',
                array('client_id'=>$client_id));



    }
}
