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

        $user = self::$UserRepository->one($email, $password);

        return (bool) $user;
    }
}