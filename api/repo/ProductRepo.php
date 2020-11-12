<?php
/**
 * Created by IntelliJ IDEA.
 * User: dhanu
 * Date: 11/12/2020
 * Time: 2:01 AM
 */

interface ProductRepo
{

    public function setConnection(mysqli $mysqliConnection): void;

    public function addProduct(Product $product): bool;
}