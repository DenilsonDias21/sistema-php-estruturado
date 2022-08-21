<?php

namespace app\controllers;

class Login {

    public function index() {
        return [
            'view' => 'login.php',
            'data' => [
                'title' => 'Login'
            ],
        ];
    }

    public function store() {
      
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
       
        if(empty($email) || empty($password)) {
            return setMessageAndRedirect('message', 'Preencha usuário e senha para continuar.', '/login');
        }
        
        $user = findBy('users', 'email', $email);

        if(!$user) {
            return setMessageAndRedirect('message', 'Email inválido', '/login');
        }
        
        if(!password_verify($password, $user->password)) {
            return setMessageAndRedirect('message', 'Senha inválida', '/login');
        }

        $_SESSION[LOGGED] = $user;
        return redirect('/');

    }

};