<?php

    require_once '../0-php-framework/Classes/action_controller.php';

    $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);

    $control = new controller();

    echo $control->login($user, $pass);