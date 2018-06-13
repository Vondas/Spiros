<?php

namespace Controllers;

use Symfony\Component\HttpFoundation\Response;

class IndexController extends BaseController
{
    public function view () {
        echo $this->render('test.html.twig');
    }
}