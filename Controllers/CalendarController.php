<?php


namespace Controllers;


class CalendarController extends BaseController
{
    public function viewAction() {
        echo $this->render('calendar.html.twig');
    }
}