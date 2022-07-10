<?php

namespace APP\Controller;

use APP\Model\Provider;
use APP\Model\Validation;
use APP\Model\ValidationProvider;
use APP\Utils\Redirect;

require_once '../../vendor/autoload.php';

if (empty($_POST)) {
    Redirect::redirect(
        message: 'Requisição inválida!',
        type: 'error'
    );
}

$providerName = $_POST["name"];
$providerPhone = $_POST["phone"];
$providerCnpj = $_POST["cnpj"];

$error = array();

if(!Validation::validateName($providerName)){
    array_push($error, "O nome do fornecedor deve conter ao menos 3 caracteres!");

}
if(!Validation::validateNumber($providerPhone)){
    array_push($error, "O número de telefone só pode conter números!");

}
if(!Validation::validateNumber($providerCnpj)){
    array_push($error, "O CNPJ deve conter 14 caracteres!");

}

if($error){
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
}else{
    $provider = new Provider(
        name: $providerName,
        phone: $providerPhone,
        cnpj: $providerCnpj
    );


    Redirect::redirect(
        message: "Fornecedor cadastrado com sucesso!"
    );
}