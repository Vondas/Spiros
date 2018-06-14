<?php

namespace Controllers;


class IndexController extends BaseController
{
    public function viewAction () {
        session_start();
        session_destroy();
        echo $this->render('dashboard.html.twig');
        return;
        if (isset($_SESSION["USER"])) {
            echo $this->render('dashboard.html.twig');
        } else {
            header("Location: /login");
            exit();
        }
    }
}