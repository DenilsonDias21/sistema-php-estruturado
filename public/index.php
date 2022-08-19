<?php

require '../bootstrap.php';

try {
    router();

    var_dump(ROOT);
    die();
} catch (\Throwable $th) {
    var_dump($th->getMessage());
}

