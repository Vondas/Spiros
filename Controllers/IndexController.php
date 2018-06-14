<?php

namespace Controllers;

use Repositories\TestRepository;

class IndexController extends BaseController
{
    private static $test = NULL;

    private function initTestRepository() {
        if (self::$test === NULL) {
            self::$test = new TestRepository();
        }
    }

    public function view () {
        $this->initTestRepository();

        $data = self::$test->all();

        echo $this->render('index.html.twig', [
            "test" => $data
        ]);
    }
}