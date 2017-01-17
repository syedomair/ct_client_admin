<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OrganizationController extends Controller
{
    /**
     * @Route("/list-organization/{client_id}", name="list_organization")
     */
    public function listOrganizationsAction(Request $request, $client_id)
    {
        $api = $this->get('client_service')->findOrganizations('1');
        //var_dump($api); 
        return $this->render('AppBundle:Organization:list_organizations.html.twig',
                array('client_id'=>$client_id,
                      'organizations' => $api['data']['records']
                     ));



    }
}
