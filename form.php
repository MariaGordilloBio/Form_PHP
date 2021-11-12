<?php

// Variável para coleta dos dados de erro
//$erro = false;

//Tamanho mínimo de caracteres para nome

//$nome = (isset($_POST['nome']));
//if(strlen($nome)<2){
//echo ("Preencha o nome com no mínimo 2 caracteres.". "<br> <br>");
//}
//else{
//echo ("O nome cadastrado foi: <br>" . $_POST['nome'] . '!' . "<br> <br>" );
//}

//Validação do email com filtro php:


//function validateEmail($email){
//$email = (isset($_POST['email']));
//if(filter_var($email, FILTER_VALIDATE_EMAIL)){
//echo ("E-mail válido. O email cadastrado foi: <br>" . $_POST['email'] . "<br> <br>");    
//}else{
//echo("E-mail inválido" );
//}
//}

// Listamos os erros existentes
//if ( $erro ) {
    //echo $erro;
//}   

//if(isset($_POST['submit'])) {
    //echo("O nome cadastrado foi: <br>" . $_POST['nome'] . '!' . "<br> <br>" );
    //echo("O email cadastrado foi: <br>" . $_POST['email'] . "<br> <br>" );
//}

echo "<h2>Seus dados cadastrados</h2>";
echo "<br>";
echo "<br>";

if(strlen(isset($_POST['nome']))<=2){
    echo ("Preencha o nome com no mínimo 2 caracteres.". "<br> <br>");
}
else{
    echo ("O nome cadastrado foi: <br>" . $_POST['nome'] . '!' . "<br> <br>" );
}

echo "<br>";

if(!filter_var(isset($_POST['email']), FILTER_VALIDATE_EMAIL)){
    echo ("E-mail inválido.");
}
else{
    echo("E-mail válido. O email cadastrado foi: <br>" . $_POST['email'] . "<br> <br>");
}

echo "<br>";