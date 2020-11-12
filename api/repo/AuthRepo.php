<?php
/**
 * Created by IntelliJ IDEA.
 * User: dhanu
 * Date: 11/11/2020
 * Time: 11:44 PM
 */

interface AuthRepo
{
    public function setConnection(mysqli $mysqliConnection): void;
    public function authLogin(Auth $auth): string;
}