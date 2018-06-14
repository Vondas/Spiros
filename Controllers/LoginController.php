<?php


namespace Controllers;

use Contexts\AccountContext\Account;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends BaseController
{
    public function loginAction () {
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === "GET") {
            echo self::render('login.html.twig');
            return;
        }

        $request = Request::createFromGlobals();
        $email = $request->get('email');
        $password = $request->get('password');

        $areCredentialsValid = Account::verifyUserCredentials($email, $password);

        if ($areCredentialsValid) {
            session_start();
            $_SESSION["USER"] = TRUE;
            header("Location: /");
            exit();
        } else {
            echo self::render('login.html.twig');
        }
    }
}