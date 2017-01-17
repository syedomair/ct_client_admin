<?php
namespace AppBundle\Services;

use Symfony\Component\HttpFoundation\Session\Session;

class ApiClientService extends BaseClientService
{

    public function __construct($backend_api_server_end_point, Session $session)
    {
        parent::__construct($backend_api_server_end_point, $session);
    }

    public function findOrganizations($client_id)
    {
        return $this->getRequest('organizations/client/'.$client_id);
    }
    public function createOrganization($client_id, $parameters)
    {
        //POST /organizations/{client_id}
        return $this->postRequest('organizations/'.$client_id, $parameters);
    }

    public function findProducts($category_id)
    {
        return $this->getRequest('products/'.$category_id);
    }

    public function findProduct($product_id)
    {
        return $this->getRequest('product/'.$product_id);
    }

    public function createUser($parameters)
    {
        return $this->postNewRequest('secure/user', $parameters);
    }

    public function authenticate($username, $password)
    {
        $this->session->set('username', $username);
        $this->session->set('password', $password);
        return $this->getRequest('secure/api-login');
    }
}
