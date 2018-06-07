<?php

require_once _MODELS . '/PDOModel.php';
require _LIBS . '/Encryption.class.php';

class UsersModel extends PDOModel {
   /*  private $encrypt = new Encryption(); */

    public function __construct($host, $dbName, $login, $password) {
        /* $encrypt ; */
        parent::__construct($host, $dbName, $login, $password);

    }

    public function createUser($username, $first_name, $last_name, $email, $password) {
        $encrypt = new Encryption();
        $encryptedPassword = $encrypt->encrypt($password);
        $q = "INSERT INTO users (username, first_name, last_name, email, password, salt, iv) VALUES (:username, :first_name, :last_name, :email, :password, :salt, :iv)";
        return $this->request($q, array(
            "username" => $username, 
            "first_name" => $first_name, 
            "last_name" => $last_name, 
            "email" => $email, 
            "password" => $encryptedPassword['encrypted_string'],
            "salt" => $encryptedPassword['salt'],
            "iv" => $encryptedPassword['iv']
        ));
    }

    public function authenticate($email, $password) {
        $encrypt = new Encryption();
        $q ="SELECT password, salt, iv FROM users WHERE email = :email LIMIT 1";
        $passwordArray = $this->select($q, array("email" => $email));
        if ($passwordArray->size > 0) {
            $passwordArray = $passwordArray->rows[0];
            if ($encrypt->decrypt($passwordArray->password, $passwordArray->salt, $passwordArray->iv) === $password) {
                $q = "SELECT id idUser, first_name, last_name, email FROM users WHERE semail = :email";
                $user = $this->select($q, array("email" => $email));
                if ($user->size > 0) {
                    $_SESSION = $this->select($q, array("email" => $email))->rows[0];
                    return true;
                } else {
                    return false;
                }
            } else {
                return 'Les informations entrées sont incorrectes !';
            }
        }
    }
}