<?php
/**
 * Created by IntelliJ IDEA.
 * User: dhanu
 * Date: 11/11/2020
 * Time: 9:59 PM
 */

class User
{

    private $userName;
    private $firstName;
    private $lastName;
    private $address;
    private $userNic;
    private $contactNo;
    private $userEmail;
    private $userPassword;
    private $userType;
    private $isActive;



    /**
     * User constructor.
     * @param $userName
     * @param $firstName
     * @param $lastName
     * @param $address
     * @param $userNic
     * @param $contactNo
     * @param $userEmail
     * @param $userPassword
     * @param $userType
     * @param $isActive
     */
    public function __construct($userName, $firstName, $lastName, $address, $userNic, $contactNo, $userEmail, $userPassword, $userType, $isActive)
    {
        $this->userName = $userName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->userNic = $userNic;
        $this->contactNo = $contactNo;
        $this->userEmail = $userEmail;
        $this->userPassword = $userPassword;
        $this->userType = $userType;
        $this->isActive = $isActive;
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
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getUserNic()
    {
        return $this->userNic;
    }

    /**
     * @param mixed $userNic
     */
    public function setUserNic($userNic): void
    {
        $this->userNic = $userNic;
    }

    /**
     * @return mixed
     */
    public function getContactNo()
    {
        return $this->contactNo;
    }

    /**
     * @param mixed $contactNo
     */
    public function setContactNo($contactNo): void
    {
        $this->contactNo = $contactNo;
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @param mixed $userEmail
     */
    public function setUserEmail($userEmail): void
    {
        $this->userEmail = $userEmail;
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

    /**
     * @return mixed
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * @param mixed $userType
     */
    public function setUserType($userType): void
    {
        $this->userType = $userType;
    }

    /**
     * @return mixed
     */
    public function getisActive()
    {
        return $this->isActive;
    }

    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive): void
    {
        $this->isActive = $isActive;
    }


}