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
        var_dump($params);
    }

}