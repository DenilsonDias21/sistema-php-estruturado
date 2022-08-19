<?php

require '../bootstrap.php';

try {
    $data = router();
    extract($data['data']);

    if(!isset($data['view'])) {
        throw new Exception("O indice view está faltnado");
    }

    if(!file_exists(VIEWS.$data['view'])) {
        throw new Exception("Essa view {$data['view']} não existe");
    }

    $view = $data['view'];

    require VIEWS.'master.php';
    die();
} catch (\Throwable $th) {
    var_dump($th->getMessage());
}

