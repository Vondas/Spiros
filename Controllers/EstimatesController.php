<?php


namespace Controllers;


class EstimatesController extends BaseController
{
    public function viewAction() {
        echo $this->render('quotes.html.twig');
    }
}