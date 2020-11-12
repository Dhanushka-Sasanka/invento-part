<?php
/**
 * Created by IntelliJ IDEA.
 * User: dhanu
 * Date: 11/11/2020
 * Time: 10:11 PM
 */

require_once __DIR__ . "/../UserRepo.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../core/User.php";

class UserRepoImpl implements UserRepo
{
    private $connection;

    public function setConnection(mysqli $mysqliConnection): void
    {
        $this->connection = $mysqliConnection;
    }

    public function addUser(User $user): bool
    {
//        $status = 0;
//        if($user->getisActive() === 'on'){
//            $status = 1;
//        }
        $query = "INSERT INTO User VALUES (0,'{$user->getAddress()}',NOW(),
'{$user->getUserNic()}','{$user->getUserPassword()}',
'{$user->getisActive()}' ,'{$user->getContactNo()}',
'{$user->getUserName()}','{$user->getUserType()}')";

        $resp = $this->connection->query($query);

        return $resp;

    }

    public function deleteUser(string $id): bool
    {
        // TODO: Implement deleteUser() method.
    }

    public function updateUser(User $user): bool
    {
        // TODO: Implement updateUser() method.
    }

    public function searchUser(string $id): array
    {
        // TODO: Implement searchUser() method.
    }

    public function getAllUsers(): array
    {
        // TODO: Implement getAllUsers() method.
    }
}