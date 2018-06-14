<?php


namespace Controllers;


class ClientsController extends BaseController
{
    public function viewAction() {
        echo $this->render('clients.html.twig');
    }
}