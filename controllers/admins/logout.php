<?php


if (isset($_SESSION['admin_name'])) {
    session_destroy();
    header("Location: /login");
    die();
} else {
    header("Location: /");
}


