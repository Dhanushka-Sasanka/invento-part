<?php
/**
 * Created by IntelliJ IDEA.
 * User: dhanu
 * Date: 11/12/2020
 * Time: 1:33 AM
 */

class Product
{

    private $productID;
    private $addedBy;
    private $addedDate;
    private $category;
    private $description;
    private $imageURL;
    private $isFeature;
    private $productCode;
    private $productName;

    /**
     * Product constructor.
     * @param $productID
     * @param $addedBy
     * @param $addedDate
     * @param $category
     * @param $description
     * @param $imageURL
     * @param $isFeature
     * @param $productCode
     * @param $productName
     */
    public function __construct($productID, $addedBy, $addedDate, $category, $description, $imageURL, $isFeature, $productCode, $productName)
    {
        $this->productID = $productID;
        $this->addedBy = $addedBy;
        $this->addedDate = $addedDate;
        $this->category = $category;
        $this->description = $description;
        $this->imageURL = $imageURL;
        $this->isFeature = $isFeature;
        $this->productCode = $productCode;
        $this->productName = $productName;
    }

    /**
     * @return mixed
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @param mixed $productID
     */
    public function setProductID($productID): void
    {
        $this->productID = $productID;
    }

    /**
     * @return mixed
     */
    public function getAddedBy()
    {
        return $this->addedBy;
    }

    /**
     * @param mixed $addedBy
     */
    public function setAddedBy($addedBy): void
    {
        $this->addedBy = $addedBy;
    }

    /**
     * @return mixed
     */
    public function getAddedDate()
    {
        return $this->addedDate;
    }

    /**
     * @param mixed $addedDate
     */
    public function setAddedDate($addedDate): void
    {
        $this->addedDate = $addedDate;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getImageURL()
    {
        return $this->imageURL;
    }

    /**
     * @param mixed $imageURL
     */
    public function setImageURL($imageURL): void
    {
        $this->imageURL = $imageURL;
    }

    /**
     * @return mixed
     */
    public function getisFeature()
    {
        return $this->isFeature;
    }

    /**
     * @param mixed $isFeature
     */
    public function setIsFeature($isFeature): void
    {
        $this->isFeature = $isFeature;
    }

    /**
     * @return mixed
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param mixed $productCode
     */
    public function setProductCode($productCode): void
    {
        $this->productCode = $productCode;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName): void
    {
        $this->productName = $productName;
    }


}