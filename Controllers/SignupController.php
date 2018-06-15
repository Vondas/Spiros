<?php


namespace Controllers;

use Contexts\AccountContext\Account;
use Symfony\Component\HttpFoundation\Request;

class SignupController extends BaseController
{
    public function signupAction () {
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === "GET") {
            echo self::render('login.html.twig');
            return;
        }

        $request = Request::createFromGlobals();
        $email = $request->get('email');
        $password = $request->get('password');
        $password_confirmation = $request->get('password_confirmation');

        $isAccountCreated = Account::createUser($email, $password, $password_confirmation);

        if ($isAccountCreated) {
            session_start();
            $_SESSION["USER"] = TRUE;
            header("Location: /");
            exit();
        } else {
            echo self::render('login.html.twig');
        }
    }
}