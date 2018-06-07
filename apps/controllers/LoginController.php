<?php
require _MODELS . '/UsersModel.php';

$db->authenticate($_POST['email'], $_POST['password'])