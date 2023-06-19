<?php

namespace src\helpers;

use src\models\User;

class LoginHelpers {
    public static function checkLogin() {
        if (!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];

            $data = User::select()->where('token', $token)->one();

            if ($data !== null) {
                $loggedUser = new User();
                $loggedUser->setId($data['id']);
                $loggedUser->setEmail($data['email']);
                $loggedUser->setName($data['name']);

                return $loggedUser;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
