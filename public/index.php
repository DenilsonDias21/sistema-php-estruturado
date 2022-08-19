<?php

require '../bootstrap.php';

try {
    router();

    require VIEWS.'master.php';
    die();
} catch (\Throwable $th) {
    var_dump($th->getMessage());
}

