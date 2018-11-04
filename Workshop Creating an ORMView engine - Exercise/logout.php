<?php
require_once "common.php";
session_start();
session_destroy();
$httpHandler->redirect('login.php');
