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

    static function verifyUserCredentials(string $email, string $password) {
        self::initUserRepo();

        $user = self::$UserRepository->one($email);

        $hash = $user->password;

        return password_verify($password, $hash);
    }

    static function createUser(string $email, string $password, string $password_confirmation) {
        self::initUserRepo();

        if ($password !== $password_confirmation) {
            return FALSE;
        }

        if (empty($email)) {
            return FALSE;
        }

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $user = self::$UserRepository->create($email, $hash);

        return $user;
    }
}