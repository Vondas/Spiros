<?php

namespace Controllers;


class IndexController extends BaseController
{
    public function viewAction () {
        session_start();

        if (isset($_SESSION["USER"])) {
            echo $this->render('dashboard.html.twig');
        } else {
            header("Location: /login");
            exit();
        }
    }
}