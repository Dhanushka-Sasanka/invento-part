<?php
/**
 * Created by IntelliJ IDEA.
 * User: dhanu
 * Date: 11/11/2020
 * Time: 11:44 PM
 */

require_once __DIR__ . "/../AuthRepo.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../core/Auth.php";

class AuthRepoImpl implements AuthRepo
{
    private $connection;

    public function setConnection(mysqli $mysqliConnection): void
    {
        $this->connection = $mysqliConnection;
    }

    public function authLogin(Auth $auth): string
    {
        $query = "SELECT user.user_type , user.`status` FROM user 
WHERE user.user_name = '{$auth->getUserName()}' && 
user.password = '{$auth->getUserPassword()}'";
        $resp = $this->connection->query($query);


//        $resp['user_type'];
        $authdetial = mysqli_fetch_assoc($resp);
        if (isset($authdetial["user_type"]) || isset($authdetial["status"])) {
//            var_dump($authdetial["user_type"] , $authdetial["status"]);

            if($authdetial["user_type"] == 'Admin' && $authdetial["status"] == 1){
                session_start();
                $_SESSION['username'] = $auth->getUserName();
                $_SESSION['usertype'] = $authdetial["user_type"];

                return 'dist/examples/dashboard.php';
            }

        }


        return "404";
    }


}