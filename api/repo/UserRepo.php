<?php
/**
 * Created by IntelliJ IDEA.
 * User: dhanu
 * Date: 11/11/2020
 * Time: 10:11 PM
 */

require_once __DIR__ . "/../core/User.php";

interface UserRepo
{

    public function setConnection(mysqli $mysqliConnection): void;

    public function addUser(User $user): bool;

    public function deleteUser(string $id): bool;

    public function updateUser(User $user): bool;

    public function searchUser(string $id): array;

    public function getAllUsers(): array;
}