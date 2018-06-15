<?php


namespace Controllers;


class ProfileController extends BaseController
{
    public function viewAction() {
        echo $this->render('profile.html.twig');
    }
}