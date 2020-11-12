<?php
/**
 * Created by IntelliJ IDEA.
 * User: dhanush
 * Date: 11/11/2020
 * Time: 9:29 PM
 */

require_once __DIR__ . "/../business/impl/UserBOImpl.php";
require_once __DIR__ . "/../core/User.php";

$userBO = new UserBOImpl();


$req_method = $_SERVER['REQUEST_METHOD'];

switch ($req_method) {

//    case "GET" :
//        echo json_encode($memberBO->getAllUsers());
//        break;

    case "POST":
        $userName = $_POST['userName'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $address = $_POST['address'];
        $userNic = $_POST['userNic'];
        $contactNo = $_POST['contactNo'];
        $userEmail = $_POST['useremail'];
        $userPassword = $_POST['userPassword'];
        $userType = $_POST['userType'];
        $isActive = 0;
//        $_POST['isActive'] = 0;
        if(isset($_POST['isActive'] )){
            $isActive = 1;
        }
        $operation = $_POST['operation'];

        switch ($operation) {
            case "add":
                $user = new User($userName,
                    $firstName,
                    $lastName,
                    $address,
                    $userNic,
                    $contactNo,
                    $userEmail,
                    $userPassword,
                    $userType,
                    $isActive
                );
                $resp = $userBO->addUser($user);
                echo $resp;
                break;

        }
        break;
}