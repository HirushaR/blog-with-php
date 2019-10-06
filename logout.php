<?php
/**
 * Created by PhpStorm.
 * User: Danuja Fernando
 * Date: 10/6/2019
 * Time: 9:46 AM
 */
session_start();
unset($_SESSION['login_user']);
session_destroy();

header("Location: index.html");
exit;