<?php
namespace src\controllers;

use \core\Controller;

class LoginController extends Controller {

 public function signIn(){
    $this->render('login');
 }

 public function Action(){
   echo 'Login recebido';
 }

 public function signUp(){
    echo 'cadastro';
 }

}