<?php 

namespace app\controllers;

class User {

    public function show($params) {
       if(!isset($params['user'])) {
        return redirect('/');
       }

       $user = findBy('users', 'iduser', $params['user']);;
       var_dump($user);
       die();
    }

    public function create($params) {
     
        return [
            'view' => 'create.php',
            'data' => [
                'title' => 'Novo usuário'
            ]
        ];
    
    }

    public function store() {
        
        $validate = validate([
            'name' => 'required',
            'email' => 'email|unique:users',
            'password' => 'required|maxlen:10'
        ]);

        if(!$validate) {
            return redirect('/user/create');
        }

        var_dump($validate);
        die();
    }

    public function logout() {
        unset($_SESSION[LOGGED]);
        return redirect('/');
    }

}