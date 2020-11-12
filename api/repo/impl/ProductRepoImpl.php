<?php
/**
 * Created by IntelliJ IDEA.
 * User: dhanu
 * Date: 11/12/2020
 * Time: 2:01 AM
 */

require_once __DIR__ . "/../ProductRepo.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../core/Product.php";


class ProductRepoImpl implements ProductRepo
{
    private $connection;

    public function setConnection(mysqli $mysqliConnection): void
    {
        $this->connection = $mysqliConnection;
    }

    public function addProduct(Product $product): bool
    {
        $query = "INSERT INTO Product VALUES (
'{$product->getProductID()}',
'{$product->getAddedBy()}','{$product->getAddedDate()}',
'{$product->getCategory()}','{$product->getDescription()}',
'{$product->getImageURL()}','{$product->getisFeature()}',
'{$product->getProductCode()}','{$product->getProductName()}')";

        $resp = $this->connection->query($query);
        return $resp;
    }
}