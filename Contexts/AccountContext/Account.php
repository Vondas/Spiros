<?php

namespace Contexts\AccountContext;

use Repositories\UserRepository;

class Account
{
    private static $UserRepository = NULL;

    private function initUserRepo() {
        if (self::$UserRepository === NULL) {
            self::$UserRepository = new UserRepository();
        }
    }

    static function verifyUserCredentials($email, $password) {
        self::initUserRepo();

        $user = self::$UserRepository->one($email);

        $hash = $user->password;

        return password_verify($password, $hash);
    }
}