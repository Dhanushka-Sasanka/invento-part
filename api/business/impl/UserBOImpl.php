<?php
/**
 * Created by IntelliJ IDEA.
 * User: dhanu
 * Date: 11/11/2020
 * Time: 10:10 PM
 */

require_once __DIR__ . "/../../business/UserBO.php";
require_once __DIR__ . "/../../repo/impl/UserRepoImpl.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../core/User.php";

class UserBOImpl implements UserBO
{

    public function __construct()
    {
        $this->userRepo = new UserRepoImpl();
    }

    public function addUser(User $user): bool
    {
        $connection = (new DBConnection())->getConnection();
        $this->userRepo->setConnection($connection);
        return $this->userRepo->addUser($user);
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