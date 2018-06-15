<?php

namespace Contexts\ClientContext;

use Repositories\ClientRepository;

class Client
{
    private static $clientRepository = NULL;

    private function initClientRepo() {
        if (self::$clientRepository === NULL) {
            self::$clientRepository = new ClientRepository();
        }
    }

    static function create(string $email = NULL,
                                 string $phone_number = NULL,
                                 string $firstname = NULL,
                                 string $lastname = NULL,
                                 string $address = NULL,
                                 string $project = NULL) {
        self::initClientRepo();

        return self::$clientRepository->create($email, $phone_number, $firstname, $lastname, $address, $project);
    }

    static function all() {
        self::initClientRepo();

        return self::$clientRepository->all();
    }
}