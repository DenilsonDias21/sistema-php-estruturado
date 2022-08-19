<?php

function connect() {

    return new PDO("mysql:host=localhost:3306;dbname=systemphp", 'root', '', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);

}