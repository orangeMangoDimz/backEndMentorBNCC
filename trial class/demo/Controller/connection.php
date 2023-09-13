<?php
// $hostname, $username, $password, $dbName
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "productmanagement";

function openConnection()
{
    global $hostname, $username, $password, $dbName;
    return mysqli_connect($hostname, $username, $password, $dbName);
}

function closeConnection($con)
{
    mysqli_close($con);
}

function getAllProducts(): array
{
    $con = openConnection();
    $query = "SELECT * FROM products";
    $res = mysqli_query($con, $query);
    if ($res){
        $products = [];
        while($product = mysqli_fetch_assoc($res)){
            array_push($products, $product);
        }
        closeConnection($con);
        return $products;
    }
    else{
        mysqli_error($con);
        closeConnection($con);
        return [];
    }
}

function createNewProduct($productData, $productImg)
{
    $con = openConnection();
    $query = "INSERT INTO products (image, name, category, stock, description)
                VALUES (
                    '{$productImg['image']['name']}',
                    '{$productData['name']}',
                    '{$productData['category']}',
                    '{$productData['stock']}',
                    '{$productData['description']}'
                )";
    $res = mysqli_query($con, $query);
    move_uploaded_file($productImg["image"]["tmp_name"], '../../source/img/product/' . $productImg["image"]["name"]);
    if (!$res){
        mysqli_errno($con);
    }
    closeConnection($con);
}

function getProductById($id)
{
    $con = openConnection();
    $query = "SELECT * FROM products WHERE id = '{$id}'";
    $result = mysqli_query($con, $query);
    if ($result){
        closeConnection($con);
        return mysqli_fetch_assoc($result);
    }
    else{
        mysqli_error($con);
        closeConnection($con);
        return [];
    }
}

function updateProduct($dataProduct, $dataImg)
{
    $con = openConnection();
    $query = "UPDATE products 
            SET 
            image = '{$dataImg['image']['name']}',
            name = '{$dataProduct['name']}',
            category = '{$dataProduct['category']}',
            stock = '{$dataProduct['stock']}',
            description = '{$dataProduct['description']}'
            WHERE 
            id = '{$dataProduct['id']}'
            ";
    $result = mysqli_query($con, $query);
    if (!$result){
        mysqli_error($con);
    }
    closeConnection($con);

    move_uploaded_file($dataImg["image"]["tmp_name"], '../../source/img/product/' . $dataImg["image"]["name"]);
}

function deleteproductById($id)
{
    $con = openConnection();
    $query = "DELETE FROM products WHERE id = '{$id}'";
    $result = mysqli_query($con, $query);
    if ($result){
        closeConnection($con);
    }
    else{
        mysqli_error($con);
        closeConnection($con);
    }
}

function getSpecificProducts($keyword)
{
    $con = openConnection();
    $query = "SELECT * FROM products 
            WHERE 
            name LIKE '%{$keyword}%'OR
            category LIKE '%{$keyword}%' OR
            stock LIKE '%{$keyword}%' OR
            description LIKE '%{$keyword}%'
            ";
    $result = mysqli_query($con, $query);
    $products = [];
    if ($result) {
        while($product = mysqli_fetch_assoc($result)){
            array_push($products, $product);
        }
        return $products;
        closeConnection($con);
    }
    else{
        mysqli_error($con);
        closeConnection($con);
        return [];
    }
}