<?php
/**
 * Created by IntelliJ IDEA.
 * User: dhanu
 * Date: 11/11/2020
 * Time: 11:42 PM
 */

require_once __DIR__ . "/../../business/AuthBO.php";
require_once __DIR__ . "/../../repo/impl/AuthRepoImpl.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../core/Auth.php";

class AuthBOImpl implements AuthBO
{
    public function __construct()
    {
        $this->authRepo = new AuthRepoImpl();
    }


    public function login(Auth $auth): string
    {
        $connection = (new DBConnection())->getConnection();
        $this->authRepo->setConnection($connection);
        return $this->authRepo->authLogin($auth);

    }
}