<?php

    session_start();

    unset($_SESSION['numero']);
    unset($_SESSION['nombre']);

    session_unset();

    session_destroy();