<?php

$nome = $_POST["nome"];
$email = ($_POST["email"]);

echo "<h2>Seus dados cadastrados</h2>";
echo "<br>";
echo "<br>";


if(isset($_POST["nome"])){

    if((strlen($nome)<=2)){

        echo (" Preencha o nome com no mínimo 2 caracteres." . "<br>");

        echo "<br>";
    }else{
        $nomecompleto = explode(" ", $nome);
        
        echo ("O nome cadastrado foi: <br>" . $nomecompleto[0] . "<br>" );

        echo "<br>";

        if (count($nomecompleto) <= 1) {
            echo ("Você não cadastrou um sobrenome.");

            echo "<br>";
        }else{
            echo ("O sobrenome cadastrado foi: <br>" . end($nomecompleto));

            echo "<br>";
        }

    }

echo "<br>";

if(isset($_POST["email"])){

    if(filter_var ($email, FILTER_VALIDATE_EMAIL)){
        echo("E-mail válido. O email cadastrado foi: <br>" . $email . "<br> <br>");
    }else{
        echo("E-mail inválido.");
    }
    
}
}