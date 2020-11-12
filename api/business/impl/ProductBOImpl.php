<?php
/**
 * Created by IntelliJ IDEA.
 * User: dhanu
 * Date: 11/12/2020
 * Time: 1:58 AM
 */

require_once __DIR__ . "/../../business/ProductBO.php";
require_once __DIR__ . "/../../repo/impl/ProductRepoImpl.php";
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../core/Product.php";
class ProductBOImpl implements ProductBO
{

    private $productRepo;

    public function __construct()
    {
        $this->productRepo = new ProductRepoImpl();
    }

    public function addProduct(Product $product): bool
    {
        $connection = (new DBConnection())->getConnection();
        $this->productRepo->setConnection($connection);
        return $this->productRepo->addProduct($product);
    }
}