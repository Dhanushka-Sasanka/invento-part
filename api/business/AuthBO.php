<?php
/**
 * Created by IntelliJ IDEA.
 * User: dhanu
 * Date: 11/11/2020
 * Time: 11:41 PM
 */
require_once __DIR__ . "/../core/Auth.php";
interface AuthBO
{

    public function login(Auth $auth): string;
}