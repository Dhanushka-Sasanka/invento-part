<?php
/**
 * Created by IntelliJ IDEA.
 * User: dhanush
 * Date: 11/11/2020
 * Time: 11:36 PM
 */

require_once __DIR__ . "/../business/impl/AuthBOImpl.php";
require_once __DIR__ . "/../core/Auth.php";

$authBO = new AuthBOImpl();

$req_method = $_SERVER['REQUEST_METHOD'];

switch ($req_method) {

//    case "GET" :
//        echo json_encode($memberBO->getAllUsers());
//        break;

    case "POST":
        $userName = $_POST['userName'];
        $userPassword = $_POST['userPassword'];
        $operation = $_POST['operation'];

        switch ($operation) {
            case "login":
                $auth = new Auth($userName,$userPassword);
                $resp = $authBO->login($auth);
                echo $resp;
                break;

        }
        break;
}