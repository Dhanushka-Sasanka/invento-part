<?php
/**
 * Created by IntelliJ IDEA.
 * User: dhanu
 * Date: 11/12/2020
 * Time: 1:58 AM
 */

require_once __DIR__ . "/../core/Product.php";
interface ProductBO
{

    public function addProduct(Product $product): bool;
}