<?php
/**
 * Created by IntelliJ IDEA.
 * User: dhanu
 * Date: 11/11/2020
 * Time: 11:39 PM
 */

class Auth
{
    private $userName;
    private $userPassword;

    /**
     * Auth constructor.
     * @param $userName
     * @param $userPassword
     */
    public function __construct($userName, $userPassword)
    {
        $this->userName = $userName;
        $this->userPassword = $userPassword;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * @param mixed $userPassword
     */
    public function setUserPassword($userPassword): void
    {
        $this->userPassword = $userPassword;
    }


}