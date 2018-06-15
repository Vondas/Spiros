<?php


namespace Controllers;


class LogoutController
{
    public function logoutAction() {
        session_start();
        session_destroy();
        header("Location: /");
        exit();
    }

}