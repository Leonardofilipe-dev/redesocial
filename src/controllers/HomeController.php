<?php
namespace src\controllers;

use \core\Controller;
use \src\helpers\LoginHelpers;

class HomeController extends Controller {
    private $loggerUser;

    public function __construct() {
        $this->loggerUser = LoginHelpers::checkLogin();

        if (LoginHelpers::checkLogin() === false) {
            $this->redirect('/login');
        }
    }

     public function index() {
        $this->loggerUser->name;
        $this->render('home', ['nome' => 'Bonieky']);
    }
}