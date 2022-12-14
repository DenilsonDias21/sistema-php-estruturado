<?php

require '../bootstrap.php';

try {
    $data = router();
    
    if(!isset($data['data'])) {
        throw new Exception("O indice data está faltando");
    }

    if(!isset($data['data']['title'])) {
        throw new Exception("O indice title está faltando");
    }

    if(!isset($data['view'])) {
        throw new Exception("O indice view está faltnado");
    }

    if(!file_exists(VIEWS.$data['view'])) {
        throw new Exception("Essa view {$data['view']} não existe");
    }

    extract($data['data']);

    $view = $data['view'];

    require VIEWS.'master.php';
    die();
} catch (\Throwable $th) {
    var_dump($th->getMessage());
}

