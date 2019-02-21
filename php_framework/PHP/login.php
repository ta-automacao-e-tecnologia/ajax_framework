<?php

    require_once '../Classes/database_connection.php';
    require_once '../Classes/database_actions.php';
    require_once '../Classes/action_controller.php';

    $control = new controller();

    echo $control->login("thiago", "123456", "Usuário ou senha incorreto(s)");
    echo "<br><br>";
    echo $control->read_table("login", "Não foi possível ler a tabela login");