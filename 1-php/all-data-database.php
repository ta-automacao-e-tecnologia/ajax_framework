<?php

    require_once '../0-php-framework/Classes/action_controller.php';

    $control = new controller();

    echo $control->read_table();