<?php 

function validate($validations) {
    $result = [];
    $param = '';
    foreach($validations as $field => $validate) {
        if(!str_contains($validate, '|')) {
            if(str_contains($validate, ':')) {
                [$validate, $param] = explode(':', $validate);
            }

            $result[$field] = $validate($field, $param);
           
        } else {
            
                $result[$field] = multipleValidations($validate, $field, $param);
            
        }

        
    }
    
    if(in_array(false, $result)) {
        
        return false;
    }

    return $result;
}

function multipleValidations($validate, $field, $param) {
    $result = [];
    $explodePipValidate = explode('|', $validate);
    foreach ($explodePipValidate as $validate) {
        if(str_contains($validate, ':')) {
            [$validate, $param] = explode(':', $validate);
        }
        $result[$field] = $validate($field, $param);
    }

    return $result;    

}

function required($field) {
    if($_POST[$field] === '') {
        setFlash($field, 'O campo é obrigatório');
        return false;
    }

    return filter_input(INPUT_POST, $field, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}

function email($field) {

    $emailIsValid = filter_input(INPUT_POST, $field, FILTER_VALIDATE_EMAIL);

    if(!$emailIsValid) {
        setFlash($field, 'O campo tem que ser um email válido!');
        return false;
    }

    return filter_input(INPUT_POST, $field, FILTER_VALIDATE_EMAIL);

}

function unique($field, $param) {
    $data = filter_input(INPUT_POST, $field, FILTER_VALIDATE_EMAIL);
    $user = findBy($param, $field, $data);
    
    if($user) {
        setFlash($field, 'O campo já está cadastrado!');
        return false;
    }

   return $data;
}

function maxlen($field, $param) {
    $data = filter_input(INPUT_POST, $field, FILTER_DEFAULT);
    
    if(strlen($data) > $param) {
        
        setFlash($field, "O campo não pode passar de {$param} caracteres");
        return false;
    }

    return $data;
}