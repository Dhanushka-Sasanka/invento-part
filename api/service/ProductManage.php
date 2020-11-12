<?php
/**
 * Created by IntelliJ IDEA.
 * User: dhanush
 * Date: 11/11/2020
 * Time: 9:29 PM
 */

require_once __DIR__ . "/../business/impl/ProductBOImpl.php";
require_once __DIR__ . "/../core/Product.php";

$productBO = new ProductBOImpl();


$req_method = $_SERVER['REQUEST_METHOD'];

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt'); // valid extensions
$path = '../upload/'; // upload directory

switch ($req_method) {

//    case "GET" :
//        echo json_encode($memberBO->getAllUsers());
//        break;

    case "POST":
        $operation = $_POST['operation'];

        switch ($operation) {
            case "add":

                if (!empty($_POST['addedBy']) ||
                    !empty($_POST['addedDate']) ||
                    !empty($_POST['category']) ||
                    !empty($_POST['description']) ||
                    !empty($_POST['isFeature']) ||
                    !empty($_POST['productCode']) ||
                    !empty($_POST['$productName']) ||
                    !empty($_FILES['image'])) {

                    $img = $_FILES['image']['name'];

                    $tmp = $_FILES['image']['tmp_name'];
// get uploaded file's extension

                    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
// can upload same image using rand function

// check's valid format
                    if (in_array($ext, $valid_extensions)) {

//


                        if (move_uploaded_file($tmp, $path . "" . $_POST['productCode'] . "." . $ext)) {

                            $addedBy = $_POST['addedBy'];
                            $addedDate = $_POST['addedDate'];
                            $category = $_POST['category'];
                            $description = $_POST['description'];
//                            $imageURL = $_POST['imageURL'];
                            $imageURL = $path . "" . $_POST['productCode'] . "." . $ext;
                            $isFeature = 0;
                            if (isset($_POST['isActive'])) {
                                $isFeature = 1;
                            }
                            $productCode = $_POST['productCode'];
                            $productName = $_POST['$productName'];
                            $productID = 0;

                            $product = new Product($productID,
                                $addedBy,
                                $addedDate,
                                $category,
                                $description,
                                $imageURL,
                                $isFeature,
                                $productCode,
                                $productName
                            );
                            $resp = $productBO->addProduct($product);
                            echo $resp;


                        }
                    } else {
                        echo 'invalid';
                    }
                }

                break;

        }

        break;


}


