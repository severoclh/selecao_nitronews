<?php

// Autoload

spl_autoload_extensions('.class.php');
spl_autoload_register(function($className) {
    $extension =  spl_autoload_extensions();
    require_once (__DIR__ . '/' . $className . $extension);
});

// Testes

// Teste 1: Informações preenchidas corretamentes
//          Exibir valores sobre o cadastro

try {

    echo "TESTE - Informacoes preenchidas corretamentes<br><br>";

    $usuario = new Usuario();

    $usuario->preencherDados("Eu", "51123456789", 1);
    $usuario->cadastrar();

    echo $usuario;

} catch (Exception $e) {

    echo "<b>Erro: </b>".$e->getMessage();

}

// Descomentar para realizar os demais testes

/*

// Teste 2: Nome não preenchido - Lançar exceção

try {

    echo "<br><br><hr>TESTE 2 - Nome nao preenchido<br><br>";

    $usuario = new Usuario();

    $usuario->preencherDados(null, "51123456789", 1);
    $usuario->cadastrar();

    echo $usuario;

} catch (Exception $e) {

    echo "<b>Erro: </b>".$e->getMessage();

}

// Teste 3: Telefone não preenchido - Lançar exceção

try {

    echo "<br><br><hr>TESTE 3 - Telefone nao preenchido<br><br>";

    $usuario = new Usuario();

    $usuario->preencherDados("Eu", null, 1);
    $usuario->cadastrar();

    echo $usuario;

} catch (Exception $e) {

    echo "<b>Erro: </b>".$e->getMessage();

}

// Teste 4: Nível não preenchido - Lançar exceção

try {

    echo "<br><br><hr>TESTE 4 - Nivel nao preenchido<br><br>";

    $usuario = new Usuario();

    $usuario->preencherDados("Eu", "51123456789", null);
    $usuario->cadastrar();

    echo $usuario;

} catch (Exception $e) {

    echo "<b>Erro: </b>".$e->getMessage();

}

*/
