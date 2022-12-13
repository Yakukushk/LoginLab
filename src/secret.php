<?php

require_once 'vendor/autoload.php';

use Apsl\Session\Session;
use Apsl\Http\Request;


$session = new Session();

$request = new Request();
if ($request->isMethod(Request::METHOD_POST)) {
    $user = $request->$_POST['username'];
    $pass = $request->$_POST['password'];

    var_dump('Here!');
    var_dump($user, $pass);

    // TODO: store in session, display success message, display error message if wrong credentials
}
