<?php

namespace Controllers;

class IndexController extends BaseController
{
    public function view() {
        echo $this->render('index.html');
    }
}