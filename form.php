<?php

//$nome = (isset($_POST["nome"]));

//$email = (isset($_POST["email"]));

echo "<h2>Seus dados cadastrados</h2>";
echo "<br>";
echo "<br>";

if((strlen($_POST["nome"]))<=2){

    //validar se entrou sobrenome também
    echo (" Preencha o nome com no mínimo 2 caracteres." . "<br> <br>");
}else{
    echo ("O nome cadastrado foi: <br>" . $_POST["nome"] . "<br> <br>" );
}

echo "<br>";

if(filter_var ($_POST["email"], FILTER_VALIDATE_EMAIL)){
    echo("E-mail válido. O email cadastrado foi: <br>" . $_POST["email"] . "<br> <br>");
}else{
    echo("E-mail inválido.");
}

echo "<br>";


