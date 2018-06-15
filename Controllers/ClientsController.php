<?php


namespace Controllers;


use Contexts\ClientContext\Client;
use Symfony\Component\HttpFoundation\Request;

class ClientsController extends BaseController
{
    public function viewAction() {
        $customers = Client::all();
        echo $this->render('clients.html.twig', [
            "customers" => $customers
        ]);
    }

    public function createAction() {
        $request = Request::createFromGlobals();
        $email = $request->get('email');
        $phone_number = $request->get('phone_number');
        $firstname = $request->get('firstname');
        $lastname = $request->get('lastname');
        $address = $request->get('address');
        $project = $request->get('project');

        Client::create($email, $phone_number, $firstname, $lastname, $address, $project);

        header('Location: /clients');
    }
}